<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_db";
$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}



?>