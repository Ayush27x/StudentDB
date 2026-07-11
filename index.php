<?php


// ======================================
// Success / Error Message
// ======================================
$message = "";
$messageType = "";

        //isset() : check variable is set or not
if (isset($_GET['error'])) {

    if ($_GET['error'] == "exists") {
        $message = "Student is already registered!";
        $messageType = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ==========================
         Main Container
    =========================== -->
    <div class="container">


        <!-- Form Heading -->
        <h2>Student Registration Form</h2>


        <!-- ==========================
             Success / Error Message
        =========================== -->
        <?php
        if ($message != "") {
        ?>
            <div class="<?php echo $messageType; ?>">
                <?php echo $message; ?>
            </div>
        <?php
        }
        ?>


        <!-- ==========================
             Student Registration Form
        =========================== -->
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="row">


        <!-- ===============================
          Student Photo
        =============================== -->

        <div class="input-box full">

        <label>Student Photo</label>

               <!-- File Input -->
                <input
                type="file"
                name="photo"
                id="photo"
                accept="image/*"
                onchange="previewImage(event)"
                required>

                <br><br>

                <!-- Image Preview -->
                <img
                id="preview"
                src=""
                alt="Image Preview"
                style="display:none;">

                </div>

                <!-- Student Name -->
                <div class="input-box">
                    <label>Student Name</label>
                    <input type="text" name="name" required>
                </div>


                <!-- Father's Name -->
                <div class="input-box">
                    <label>Father's Name</label>
                    <input type="text" name="fathers_name" required>
                </div>


                <!-- Mother's Name -->
                <div class="input-box">
                    <label>Mother's Name</label>
                    <input type="text" name="mother_name" required>
                </div>


                <!-- Gender -->
                <div class="input-box">
                    <label>Gender</label>
                    <input type="radio" name="gender" value="Male" required> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                </div>


                <!-- Date of Birth -->
                <div class="input-box">
                    <label>Date of Birth</label>
                    <input type="date" name="dob">
                </div>


                <!-- Roll Number -->
                <div class="input-box">
                    <label>Roll Number</label>
                    <input type="text" name="roll_number" required>
                </div>


                <!-- Contact Number -->
                <div class="input-box">
                    <label>Contact Number</label>
                    <input type="text" name="contact" required>
                </div>


                <!-- Email -->
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>


                <!-- Course -->
                <div class="input-box">
                    <label>Course</label>
                    <input type="text" name="course">
                </div>


                <!-- Branch -->
                <div class="input-box">
                    <label>Branch</label>
                    <input type="text" name="branch">
                </div>


                <!-- Semester -->
                <div class="input-box">
                    <label>Semester</label>
                    <input type="number" name="semester">
                </div>


                <!-- Address -->
                <div class="input-box full">
                    <label>Address</label>
                    <textarea name="address"></textarea>
                </div>


                <!-- City -->
                <div class="input-box">
                    <label>City</label>
                    <input type="text" name="city">
                </div>


                <!-- State -->
                <div class="input-box">
                    <label>State</label>
                    <input type="text" name="state">
                </div>


                <!-- PIN Code -->
                <div class="input-box">
                    <label>PIN Code</label>
                    <input type="text" name="pincode">
                </div>
            </div>


            <!-- Submit Button -->
            <button type="submit">
                Register Student
            </button>

        </form>
    </div>
    
    <script>

// ===================================
// Image Preview Function
// ===================================

function previewImage(event){

    // Preview image ko select karna
    let image = document.getElementById("preview");

    // Selected file ka temporary URL banana
    image.src = URL.createObjectURL(event.target.files[0]);

    // Image ko visible karna
    image.style.display = "block";

}

</script>
</body>
</html>