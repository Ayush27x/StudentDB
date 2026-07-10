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
$temp = $_FILES['photo']['tmp_name'];
(move_uploaded_file($temp, "uploads/".$photo));



// ==============================
// Check Duplicate Roll Number
// ==============================

$check = "SELECT * FROM studentdb WHERE roll_number='$roll_number'";

$result = mysqli_query($con,$check);

if(mysqli_num_rows($result) > 0){

    header("Location:index.php?error=exists");

    exit();

}


$sql = "INSERT INTO studentdb  
        (name,fathers_name,mother_name,roll_number,contact,email,dob,gender,course,branch,semester,address,city,state,pincode,photo)
        VALUES
        ('$name','$fathers_name','$mother_name','$roll_number','$contact','$email','$dob','$gender','$course','$branch','$semester','$address','$city','$state','$pincode','$photo')";


// ==============================
// Insert Student Data
// ==============================

if(mysqli_query($con,$sql)){

    $saved = true;

}else{

    die(mysqli_error($con));

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_insert.css">
</head>
<body>

    <div>
        <h1><?php 
        if($saved) {
        echo "Data saved!";
    }?></h1>
    
    <br>
    
    <p><strong>Student Photo:</strong></p>

    <img src="uploads/<?php echo $photo; ?>" width="150" height="150">
    
    
    <p>Name = <?php echo $name; ?></p>
    <p>Father's Name = <?php echo $fathers_name; ?></p>
    <p>Mother's Name = <?php echo $mother_name; ?></p>
    <p>Gender = <?php echo $gender; ?></p>
    <p>Date of Birth = <?php echo $dob; ?></p>
    <p>Roll No. = <?php echo $roll_number; ?></p>
    <p>Contact = <?php echo $contact; ?></p>
    <p>Email = <?php echo $email; ?></p>
    <p>Course = <?php echo $course; ?></p>
    <p>Branch = <?php echo $branch; ?></p>
    <p>Semester = <?php echo $semester; ?></p>
    <p>Address = <?php echo $address; ?></p>
    <p>City = <?php echo $city; ?></p>
    <p>State = <?php echo $state; ?></p>
    <p>PIN Code = <?php echo $pincode; ?></p>
    </div>

</body>
</html>