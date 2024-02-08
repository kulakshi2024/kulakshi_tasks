<?php
//shell.hamk.fi >>> localhost
$servername = "localhost";
$username ="kulakshi23000";
$password  ="password";
$dbname = "";

// create table connection
$conn = new mysqli($servername,$username,$password,$dbname);

// check connection
if ($conn->connect_error){
    die("connection Failed:" . $conn->connect_error);
}

echo'connection success';
?>