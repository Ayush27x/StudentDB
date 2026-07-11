<?php

// ======================================
// Database Connection
// ======================================

include 'connect.php';


// ======================================
// Retrieve Form Data
// ======================================

$id = $_POST['id'];

$old_photo = $_POST['old_photo'];

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
// Photo Update
// ======================================

if($_FILES['photo']['name'] != ""){

    // New Photo
    $photo = $_FILES['photo']['name'];

    $temp = $_FILES['photo']['tmp_name'];

    // Upload New Photo
    move_uploaded_file($temp, "uploads/".$photo);

    // Delete Old Photo
    if($old_photo != "" && file_exists("uploads/".$old_photo)){

        unlink("uploads/".$old_photo);

    }

}
else{

    // Keep Old Photo
    $photo = $old_photo;

}


// ======================================
// Update Query
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
pincode='$pincode',
photo='$photo'

WHERE id='$id'";


// ======================================
// Execute Query
// ======================================

if(mysqli_query($con,$sql)){

    header("Location:view.php");

    exit();

}
else{

    echo "Update Failed <br>";

    echo mysqli_error($con);

}

?>