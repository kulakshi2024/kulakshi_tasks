<?php

include 'footer.php';

//what to do with thw data

if(isset($_POST['submit'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$city = $_POST['city'];
$groupid = $_POST['groupid'];

// connect to the database server
include 'db.php';
 // write sql statement to insert data
 $sql = "insert into studentsinfo (first_name, last_name, city, groupid)
        values ('$name','$lname', '$city',' $groupid')";

if ($conn->query($sql)===TRUE) {
    echo "your data was recorded";
}
else{
    echo "Error:" . $sql . "<br>" . $conn->error;

}
$conn->close();
}

include 'footer.php';
?>