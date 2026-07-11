<?php

// ======================================
// Database Connection
// ======================================

include 'connect.php';


// ======================================
// Get Student ID from URL
// Example: edit.php?id=5
// ======================================

$id = $_GET['id'];


// ======================================
// Fetch Student Data
// ======================================

$sql = "SELECT * FROM studentdb WHERE id='$id'";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student</title>

    <link rel="stylesheet" href="style_edit.css">

</head>

<body>

<div class="container">

<h2>Edit Student Details</h2>

<!-- ======================================
     Edit Form
====================================== -->

<form action="update.php"
      method="POST"
      enctype="multipart/form-data">

    <!-- Hidden Student ID -->

    <input
    type="hidden"
    name="id"
    value="<?php echo $row['id']; ?>">


    <!-- Hidden Old Photo -->

    <input
    type="hidden"
    name="old_photo"
    value="<?php echo $row['photo']; ?>">


    <!-- Current Student Photo -->

    <label>Current Photo</label>

    <br>

    <img
    src="uploads/<?php echo $row['photo']; ?>"
    width="150"
    height="150"
    style="border-radius:10px;
           object-fit:cover;
           border:2px solid #007bff;">

    <br><br>


    <!-- Change Photo -->

    <label>Change Photo</label>

    <input
    type="file"
    name="photo"
    accept="image/*">

    <br><br>


    <!-- Student Name -->

    <label>Student Name</label>

    <input
    type="text"
    name="name"
    value="<?php echo $row['name']; ?>"
    required>


    <!-- Father's Name -->

    <label>Father's Name</label>

    <input
    type="text"
    name="fathers_name"
    value="<?php echo $row['fathers_name']; ?>"
    required>


    <!-- Mother's Name -->

    <label>Mother's Name</label>

    <input
    type="text"
    name="mother_name"
    value="<?php echo $row['mother_name']; ?>"
    required>


    <!-- Date of Birth -->

    <label>Date of Birth</label>

    <input
    type="date"
    name="dob"
    value="<?php echo $row['dob']; ?>">


    <!-- Roll Number -->

    <label>Roll Number</label>

    <input
    type="text"
    name="roll_number"
    value="<?php echo $row['roll_number']; ?>"
    required>


    <!-- Contact -->

    <label>Contact Number</label>

    <input
    type="text"
    name="contact"
    value="<?php echo $row['contact']; ?>"
    required>


    <!-- Email -->

    <label>Email</label>

    <input
    type="email"
    name="email"
    value="<?php echo $row['email']; ?>"
    required>


    <!-- Course -->

    <label>Course</label>

    <input
    type="text"
    name="course"
    value="<?php echo $row['course']; ?>">


    <!-- Branch -->

    <label>Branch</label>

    <input
    type="text"
    name="branch"
    value="<?php echo $row['branch']; ?>">


    <!-- Semester -->

    <label>Semester</label>

    <input
    type="number"
    name="semester"
    value="<?php echo $row['semester']; ?>">


    <!-- Address -->

    <label>Address</label>

    <textarea
    name="address"><?php echo $row['address']; ?></textarea>


    <!-- City -->

    <label>City</label>

    <input
    type="text"
    name="city"
    value="<?php echo $row['city']; ?>">


    <!-- State -->

    <label>State</label>

    <input
    type="text"
    name="state"
    value="<?php echo $row['state']; ?>">


    <!-- PIN Code -->

    <label>PIN Code</label>

    <input
    type="text"
    name="pincode"
    value="<?php echo $row['pincode']; ?>">


    <!-- Update Button -->

    <button type="submit">

        Update Student

    </button>

</form>

</div>

</body>

</html>