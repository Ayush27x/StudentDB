<?php

// ======================================
// Database Connection
// ======================================

include 'connect.php';


// ======================================
// Retrive data from form
// ======================================

$id = $_POST['id'];

$name = $_POST['name'];
$fathers_name = $_POST['fathers_name'];
$mother_name = $_POST['mother_name'];
$dob = $_POST['dob'];
$roll_number = $_POST['roll_number'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$course = $_POST['course'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];


// ======================================
// UPDATE Query
// ======================================

$sql = "UPDATE studentdb SET

name='$name',

fathers_name='$fathers_name',

mother_name='$mother_name',

dob='$dob',

roll_number='$roll_number',

contact='$contact',

email='$email',

course='$course',

branch='$branch',

semester='$semester',

address='$address',

city='$city',

state='$state',

pincode='$pincode'

WHERE id='$id'";


// ======================================
// Query Execute
// ======================================

if(mysqli_query($con,$sql)){
    header("Location:view.php");
    exit();
}
else{

    echo "Update Failed";
    echo "<br>";
    echo mysqli_error($con);

}

?>