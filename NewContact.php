<!DOCTYPE html>
<html>

    <?php 
    $server="localhost";
    $userid ="root";
    $Password = "";
    $myDB = "dolphin_crm";

    $con = mysqli_connect($server,$userid,$Password,$myDB);
    ?>

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="NewContact.css" media="screen">
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
                        <button type="submit" name="home"><i class="fa fa-home"></i> Home </button>
                    </div>
                    <div class="button">
                        <button type="submit" name="contact"><i class="fa fa-user"></i> New Contact </button>
                    </div>
                    <div class="button">
                        <button type="submit" name="users"><i class="fa fa-search"></i> Users </button>
                    </div>
                    <div class="button">
                        <button type="submit" name="logout"><i class="fa fa-lock"></i> Logout </button>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container">
                    <h2><b> New Contact</b></h2>
                    <div class="info">
                        <form action="connect.php" method="post">
                            <div class="title">
                                <h5>Title</h5>
                                <select class="select" name="gender" id="gender">
                                    <option value="Mr">Mr.</option>
                                    <option value="Mrs">Mrs.</option>
                                </select>
                            </div>
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
                            <div class="Telephone">
                                <h5>Telephone</h5>
                                <input type="text" name="telephone" id="telephone" placeholder="(XXX) XXX-XXXX">
                            </div>
                            <div class="Company">
                                <h5>Company</h5>
                                <input type="text" name="company" id="company" placeholder="Insert Company Name">
                            </div>
                            <div class="Type">
                                <h5>Type</h5>
                                <select class="select" name="ctype" id="ctype">
                                    <option value="SalesLead">Sales Lead</option>
                                    <option value="Support">Support</option>
                                </select>
                            </div>
                            <div class="Assigned">
                                <h5>Assigned To</h5>
                                <select class="select" name="assigned" id="assigned">
                                <option>Select A Name Below</option>
                                <?php 
                                    $sqli = "SELECT * FROM Users";
                                    $result = mysqli_query($con, $sqli);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<option>'.$row['firstname']." ".$row['lastname'].'</option>';
                                    }
                                    ?>
                                </select>

                            <?php mysqli_close($con); ?>
                            </div>
                            <div class="button">
                                <button type="submit" name="save">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>