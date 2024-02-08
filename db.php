<?php
//shell.hamk.fi >>> localhost
$servername = "localhost";
$username ="kulakshi23000";
$password  ="fZFKyIzq";
$dbname = "wp_kulakshi23000";

// create table connection
$conn = new mysqli($servername,$username,$password,$dbname);

// check connection
if ($conn->connect_error){
    die("connection Failed:" . $conn->connect_error);
}

echo'connection success';
?>