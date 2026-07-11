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
    <link rel="stylesheet" href="style_view.css">
</head>
<body>

    <div id="container">
    <!-- Heading -->
    <h1>All Student's List</h1>

     <!-- border = "1" border redios   -->
    <table border = "1"> 
        
        <tr>

            <!-- Table heading -->
            <th>Photo</th>
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
            <th>Action</th>
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
        
            <td>
                <img src="uploads/<?php echo $row['photo']; ?>"
                    alt="Student Photo"
                    width="80"
                    height="80">
            </td>

        
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['fathers_name']?></td>
            <td><?php echo $row['mother_name']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['roll_number']?></td>
            <td><?php echo $row['contact']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['course']?></td>
            <td><?php echo $row['branch']?></td>
            <td><?php echo $row['semester']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['city']?></td>
            <td><?php echo $row['state']?></td>
            <td><?php echo $row['pincode']?></td>
           
            <!-- ==========================
            Action Buttons
            ========================== -->
            <td class="action">
                
            <!-- Edit Button -->
            <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit-btn">
            Edit
            </a>

            <!-- Delete Button -->
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete-btn"
            onclick="return confirm('Are you sure ?');">
            Delete
            </a>

            </td>
            </tr>

        <?php
            }
        ?>
          
    </table>
    </div>
</body>
</html>