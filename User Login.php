<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="UserLogin.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header class="container">
            <img class="pic1" src="https://www.freepnglogos.com/uploads/dolphin-png/sea-screamer-dolphin-tours-clearwater-guaranteed-2.png" width="75" height="75">
            <h4 id="h4">Dolphin CRM</h4>
        </header>

        <div class="login">
            <h3><b>Login</b></h3>
        </div>

        <div>
            <?php
                
                $host = 'localhost';
                $dbname = 'dolphin_crm';
                    
                $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4","root");

                if(isset($_POST['EAddress'])){
                    $uname=$_POST['EAddress'];
                    $password=$_POST['Password'];

                    $stmt = $conn->query("SELECT * FROM users WHERE email='".$uname."' AND password='".$password."'");
                    
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    print_r($result[0]);
                    try{
                        if($result[0]['password'] == $password && $result[0]['email'] == $uname){
                            echo "Login Successful";
                            header('Location: viewUser.php');

                        }
                        else{
                            echo "Login Failed";
                        } 
                    } catch (TypeError $e){
                        echo ' ';
                    }
                }
            ?>
        </div>
        <form method="POST" action="#">
        <div class="button">
            <input type="text" name="EAddress" id="Address" placeholder="Email Adrress">
        </div>
        
        <div class="button">
            <input type="password" name="Password" id="Password" placeholder="Password">
        </div>
        <input type="checkbox" onclick="myFunction()">Show Password

        <div class="button">
            <button type="submit" name="button"> Login </button>
        </div>
            </form>

        <script>
            function myFunction(){
                var myButton = document.getElementById("Password");
                if (myButton.type === "password"){
                    myButton.type = "text";
                }
                else{
                    myButton.type = "password";
                }
            }
        </script>

        <footer>
            <p>Copyright &copy; 2022 Dolphin CRM</p>
        </footer>
    </body>
</html>