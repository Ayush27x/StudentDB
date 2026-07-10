<?php

include 'connect.php';

$name = $_POST['name'];
$fathers_name = $_POST['fathers_name'];
$roll_number = $_POST['roll_number'];
$contact = $_POST['contact'];
$email = $_POST['email'];

$sql = "INSERT INTO studentdb  
        (name,fathers_name,roll_number,contact,email)
        VALUES
        ('$name','$fathers_name','$roll_number','$contact','$email')";


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