<?php

include 'connect.php';

$name = $_POST['name'];
$fathers_name = $_POST['fathers_name'];
$mother_name = $_POST['mother_name'];
$gender = $_POST['gender'];
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
$photo = $_FILES['photo']['name'];


$sql = "INSERT INTO studentdb  
        (name,fathers_name,roll_number,contact,email,dob,gender,course,branch,semester,address,city,state,pincode,photo)
        VALUES
        ('$name','$fathers_name','$roll_number','$contact','$email','$dob','$gender','$course','$branch','$semester','$address','$city','$state','$pincode','$photo')";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <h1><?php 
        if(mysqli_query($con,$sql)) {
        echo "Data saved!";
    }?></h1>
    <br>
    <p>Name = <?php echo $name; ?></p>
    <p>Father's Name = <?php echo $fathers_name; ?></p>
    <p>Roll Number = <?php echo $roll_number; ?></p>
    <p>Contact = <?php echo $contact; ?></p>
    <p>Email = <?php echo $email; ?></p>

    </div>

</body>
</html>