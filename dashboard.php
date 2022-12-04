<?php
$host = 'localhost';
$dbname = 'dolphin_crm';
$password = '';
$username = 'root';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$username,$password);

$filtered = $_GET["filter"];

if($filtered == "All"){
    echo all_contacts($conn);
}

if($filtered == "Support"){
    echo support($conn);
}

if($filtered == "SalesLead"){
    echo slead($conn);
}

if($filtered == "atm"){
    echo atm($conn);
}

function all_contacts($conn){
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
        $name = $row["title"]. ' ' . $row["firstname"]. ' '.$row["lastname"];
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["company"]."</td>";
        echo "<td>".$row["type"]."</td>";
        echo "<td><a href='#'>view</a></td>";
        echo "</tr>";
    }

    echo "</table>";

}

function support($conn){
    $stmt = $conn->query("SELECT * FROM Contacts where type='Support'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Company</th>";
    echo "<th>Type</th>";
    echo "</tr>";

    foreach($results as $row){
        $name = $row["title"]. ' ' . $row["firstname"]. ' '.$row["lastname"];
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["company"]."</td>";
        echo "<td>".$row["type"]."</td>";
        echo "<td><a href='#'>view</a></td>";
        echo "</tr>";
    }

    echo "</table>";

}

function slead($conn){
    $stmt = $conn->query("SELECT * FROM Contacts where type='Sales Lead'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Company</th>";
    echo "<th>Type</th>";
    echo "</tr>";

    foreach($results as $row){
        $name = $row["title"]. ' ' . $row["firstname"]. ' '.$row["lastname"];
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["company"]."</td>";
        echo "<td>".$row["type"]."</td>";
        echo "<td><a href='#'>view</a></td>";
        echo "</tr>";
    }

    echo "</table>";

}


function atm($conn){
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
        $name = $row["title"]. ' ' . $row["firstname"]. ' '.$row["lastname"];
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["company"]."</td>";
        echo "<td>".$row["type"]."</td>";
        echo "<td><a href='#'>view</a></td>";
        echo "</tr>";
    }

    echo "</table>";

}



?>