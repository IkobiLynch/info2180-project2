<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="AddUser.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header class="container">
            <img class="pic1" src="https://www.freepnglogos.com/uploads/dolphin-png/sea-screamer-dolphin-tours-clearwater-guaranteed-2.png" width="75" height="75">
            <h4 id="h4">Dolphin CRM</h4>
        </header>
        
        <main>
            <section class="headings">
                <div class="container">
                    <div class="button">
                        <button type="submit" name="home" onclick=""> Home <img src="home.png" alt=""> </button>
                    </div>
                    <div class="button">
                        <button type="submit" name="contact" onclick="">New Contact <img src="user.png" alt=""></button>
                    </div>
                    <div class="button">
                        <button type="submit" name="users" onclick="document.location='viewUser.php'"> Users <img src="multiple-users-silhouette.png" alt=""></button>
                    </div>
                    <hr>
                    
                    <div class="button">
                        <button type="submit" name="logout" onclick=""> Logout <img src="logout.png" alt=""></button>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container">
                    <h2><b> New User</b></h2>
                    <div>
                        <?php
                                $host = 'localhost';
                                $dbname = 'dolphin_crm';
                            
                                $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4","root");

                                if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])){
                                    $fname=$_POST['fname'];
                                    $lname=$_POST['lname'];
                                    $email=$_POST['email'];
                                    $password=$_POST['password'];
                                    $role=$_POST['role'];
                                    $stmt = $conn->query("INSERT INTO users (`firstname`, `lastname`, `password`, `email`, `role`) VALUES('$fname', '$lname', '$password', '$email', '$role')");
                                    header('Location: viewUser.php');
                                }
                                else{
                                    echo "";
                                }
                        ?>
                    </div>
                        <form method="POST" action="#">
                            <div class="FNAme">
                                <h5>First Name</h5>
                                <input type="text" name="fname" id="fname" placeholder="John">
                            </div>
                            <div class="LName">
                                <h5>Last Name</h5>
                                <input type="text" name="lname" id="lname" placeholder="Doe">
                            </div>
                            <div class="Email">
                                <h5>Email</h5>
                                <input type="text" name="email" id="email" placeholder="something@example.com">
                            </div>
                            <div class="Password">
                                <h5>Password</h5>
                                <input type="password" name="password" id="password" show="*">
                            </div>
                            <div class="option">
                                <h5>Role</h5>
                                <select class="select" name="role" id="role">
                                    <option value="Member">Member</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                            <div class="button">
                                <button type="submit" name="save" onclick="myFunction()">Save</button>
                            </div>
                        </form>
                    </div>
            </section>
        </main>
    </body>
</html>