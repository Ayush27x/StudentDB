<?php

include 'connect.php';


// Retrive ID from URL
//====================
$id = $_GET['id'];


// Student Delete Query
//=====================
$sql = "DELETE FROM studentdb WHERE id='$id'";


// Query Execute
//==============
if(mysqli_query($con, $sql)) {
    header("Location:view.php");
    exit();
}
else {
    echo "Deleted failed";
}













?>