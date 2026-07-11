<?php

//=====================
// Database connection
//=====================
include 'connect.php';


//=====================
// Fatch All Student
//=====================
$sql = "SELECT * FROM studentdb";
$result = mysqli_query($con, $sql);

?>

<!-- //=====================
    // HTML
    //===================== -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
</head>
<body>

    <!-- Heading -->
    <h1>All Student's List</h1>

     <!-- border = "1" border redios   -->
    <table border = "1"> 
        
        <tr>
            
            <!-- Table heading -->
            <th>ID</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Roll No.</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Semester</th>
            <th>Address</th>
            <th>City</th>
            <th>state</th>
            <th>PIN Code</th>
        </tr>


        <!-- ====================
        Export Data from Database
        ===================== -->
        <?php
        
            while($row = mysqli_fetch_assoc($result)) {
        ?>

        
        <!-- ====================
            Row Start
        ===================== -->
        <tr>
            <!-- Student ID  -->
            <td><?php echo $row['id']?></th>
            <td><?php echo $row['name']?></th>
            <td><?php echo $row['fathers_name']?></th>
            <td><?php echo $row['mother_name']?></th>
            <td><?php echo $row['gender']?></th>
            <td><?php echo $row['dob']?></th>
            <td><?php echo $row['roll_number']?></th>
            <td><?php echo $row['contact']?></th>
            <td><?php echo $row['email']?></th>
            <td><?php echo $row['course']?></th>
            <td><?php echo $row['branch']?></th>
            <td><?php echo $row['semester']?></th>
            <td><?php echo $row['address']?></th>
            <td><?php echo $row['city']?></th>
            <td><?php echo $row['state']?></th>
            <td><?php echo $row['pincode']?></th>
        </tr>

        <?php
            }
        ?>
          
    </table>
</body>
</html>