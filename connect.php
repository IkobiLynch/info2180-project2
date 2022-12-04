<?php
    $gender = $_POST['gender'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$telephone = $_POST['telephone'];
    $ctype = $_POST['ctype'];
    $date = date("Y-m-d H:i:s");
    $user_id = 1;
	$assigned = $_POST['assigned'];
	$aname = $fname." ".$lname;

	$parts = explode(" ", $assigned);
	$ulastname = array_pop($parts);
	$ufirstname = implode(" ", $parts);


	// Database connection
    $server="localhost";
    $userid ="root";
    $Password = "";
    $myDB = "dolphin_crm";

    $conn = new mysqli($server,$userid,$Password,$myDB);

	$sql = "SELECT id FROM users WHERE firstname= '$ufirstname' AND lastname= '$ulastname'";
	$result = mysqli_query($conn, $sql);
	$lookup = $result->fetch_array()[0] ?? '';
	
    

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to, created_by, created_at, updated_at) values(?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?)");
		$stmt->bind_param("sssssssiiss",$gender, $fname, $lname, $email, $telephone, $company, $ctype, $lookup ,$lookup,  $date, $date);
		$execval = $stmt->execute();
		/*echo $execval;*/
		echo "Registered successfully...\n";
		$stmt->close();
		$conn->close();
	}
?>