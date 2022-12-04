<?php
$host = 'localhost';
$dbname = 'dolphin_crm';
$password = '';
$username = 'root';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$username,$password);



if(isset($_GET["id"])){
    //echo id1($conn);
    $id = $_GET["id"];
    echo displayinfo($conn,$id);
}

if(isset($_GET["filter"])){
    $filtered = $_GET["filter"];
    if($filtered == "All"){
        echo all_contacts($conn,$filtered);
    } else if($filtered == "Support"){
        echo support($conn,$filtered);
    }else if($filtered == "SalesLead"){
        $filtered="Sales Lead";
        echo slead($conn,$filtered);
    }else if($filtered == "atm"){
        echo atm($conn,$filtered);
    }
}

function displayinfo($conn,$id){
    $stmt = $conn->query("SELECT * FROM Contacts where id='$id'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($results as $row){
        $name = $row["title"]. ' ' . $row["firstname"]. ' '.$row["lastname"];
        echo $name;
        echo $row["created_by"];
        echo $row["updated_at"];
        echo $row["email"];
        echo $row["company"];
        echo $row["telephone"];
        echo $row["assigned_to"];
        echo $row["type"];
        
    }

    $stmt = $conn->query("SELECT * FROM Notes where contact_id='$id'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($results as $row){
        echo $row["created_by"];
        echo $row["comment"];
        echo $row["created_at"];
        
    }
    

    
}



function all_contacts($conn,$filtered){
    $stmt = $conn->query("SELECT * FROM Contacts");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Company</th>";
    echo "<th>Type</th>";
    echo "</tr>";

    foreach($results as $row){
        $assign=$row["id"];
        $name = $row["title"]. ' ' . $row["firstname"]. ' '.$row["lastname"];
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["company"]."</td>";
        echo "<td>".$row["type"]."</td>";
        echo "<td><span class='link' id='$assign'>view</span></td>";
        echo "</tr>";
    }

    echo "</table>";

}

function support($conn,$filtered){
    $stmt = $conn->query("SELECT * FROM Contacts where type='$filtered'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Company</th>";
    echo "<th>Type</th>";
    echo "</tr>";

    foreach($results as $row){
        $assign=$row["id"];
        $name = $row["title"]. ' ' . $row["firstname"]. ' '.$row["lastname"];
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["company"]."</td>";
        echo "<td>".$row["type"]."</td>";
        echo "<td><span class='link' id='$assign'>view</span></td>";
        echo "</tr>";
    }

    echo "</table>";

}

function slead($conn,$filtered){
    $stmt = $conn->query("SELECT * FROM Contacts where type='$filtered'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Company</th>";
    echo "<th>Type</th>";
    echo "</tr>";

    foreach($results as $row){
        $assign=$row["id"];
        $name = $row["title"]. ' ' . $row["firstname"]. ' '.$row["lastname"];
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["company"]."</td>";
        echo "<td>".$row["type"]."</td>";
        echo "<td><span class='link' id='$assign'>view</span></td>";
        echo "</tr>";
    }

    echo "</table>";

}


function atm($conn,$filtered){
    $stmt = $conn->query("SELECT * FROM Contacts where assigned_to='$username'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Company</th>";
    echo "<th>Type</th>";
    echo "</tr>";

    foreach($results as $row){
        $assign=$row["id"];
        $name = $row["title"]. ' ' . $row["firstname"]. ' '.$row["lastname"];
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["company"]."</td>";
        echo "<td>".$row["type"]."</td>";
        echo "<td><span class='link' id='$assign'>view</span></td>";
        echo "</tr>";
    }

    echo "</table>";

}


?>