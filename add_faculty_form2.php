<!DOCTYPE html>
<html>

    <head>
        <title>Edit User Form</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: white;
                scroll-behavior: smooth;
            }

            .container {
                width: 1200px;
                margin-top: 50px;
                margin-bottom: 50px;
                border: 1px solid #e1e4e8;
                border-radius: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                padding-left: 40px;
                padding-right: 40px;
                padding-bottom: 35px;
                font-size: 20px;
            }

            label {
                display: block;
                margin-top: 10px;
            }

            input[type="text"],
            input[type="email"],
            select {
                width: 1000px;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 15px;
                border: 1px solid #cccccc;
                border-radius: 4px;
            }

            .addbutton {
                font-size: 15px;
                padding: 20px 20px;
                background-color: #2ea44f;
                color: white;
                border: 2px solid;
                border-radius: 20px;
                cursor: pointer;
                transform: translatex(570%);
            }

            .addbutton:hover {
                box-shadow: 0 0 10px #2ea44f;
            }

            input[type="file"] {
                display: none;
            }

            .upload-btn {
                display: inline-block;
                padding: 8px 15px;
                border-radius: 10px;
                border: 2px solid;
                border-color: #2ea44f;
                color: #2ea44f;
                cursor: pointer;
            }

            .upload-btn:hover {
                background-color: #2ea44f;
                color: white;
                border-color: white;
            }

            .label-container1 {
                display: flex;
                align-items: center;
                gap: 150px;
            }

            .label-container2 {
                display: flex;
                align-items: center;
                gap: 100px;
            }
        </style>
        <script>
            function chooseFile(inputId) {
                document.getElementById(inputId).click();
            }
        </script>
    </head>

    <body>
        <div class="container">
            <h1>Edit Personal Details</h1>

            <?php
            session_start();
            include 'database.php';
            include 'fetch_data.php';

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $username = $_POST["username"];
                $name = $_POST["name"];
                $title = $_POST["title"];
                $designation = $_POST["designation"];
                $department = $_POST["department"];
                $email = $_POST["email"];
                $question = $_POST['question'];
                $answer = $_POST['answer'];
                $imageFileName = $_FILES['image']['name'];
                $resumeFileName = $_FILES['resume']['name'];

                $imageTempName = $_FILES['image']['tmp_name'];
                $resumeTempName = $_FILES['resume']['tmp_name'];

                // Check if the username exists
                $checkQuery = "SELECT * FROM new_faculty_resume WHERE username = '$username'";
                $checkResult = mysqli_query($conn, $checkQuery);
                if (mysqli_num_rows($checkResult) > 0) {
                    // Proceed with the update
                    $sql = "UPDATE new_faculty_resume 
                SET name='$name', title='$title', designation='$designation', 
                    department='$department', email='$email', 
                    security_Answer='$answer', security_Question='$question'";

                    // Check if image is uploaded
                    if ($imageFileName) {
                        $imageUploadPath = 'uploads/images/' . $imageFileName;
                        move_uploaded_file($imageTempName, $imageUploadPath);
                        $sql .= ", image='$imageUploadPath'";
                    }

                    // Check if resume is uploaded
                    if ($resumeFileName) {
                        $resumeUploadPath = 'uploads/resumes/' . $resumeFileName;
                        move_uploaded_file($resumeTempName, $resumeUploadPath);
                        $sql .= ", resume='$resumeUploadPath'";
                    }

                    $sql .= " WHERE username='$username'";

                    $stmt = mysqli_prepare($conn, $sql);

                    if ($stmt) {
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_close($stmt);
                        header('location: DashFaculty.php?username=' . $username);

                    } else {
                        // Error during update
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <font color="red"><strong>ERROR!!</strong> There was an error updating the record: ' . mysqli_error($conn) . '</font>
                </div>';
                    }
                } else {
                    // Username does not exist
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <font color="red"><strong>ERROR!!</strong> Username does not exist</font>
            </div>';
                }

                mysqli_close($conn);
            }
            ?>

            <form action="add_faculty_form2.php" method="post" enctype="multipart/form-data">
                <label for="username">Username :</label>
                <input class="custom-input" type="text" id="username" name="username"
                    value="<?php echo isset($user['username']) ? $user['username'] : ''; ?>" required />

                <!-- Other form fields with their respective values from $user -->
                <label for="name">Full Name :</label>
                <input class="custom-input" type="text" id="name" name="name"
                    value="<?php echo isset($user['name']) ? $user['name'] : ''; ?>" required />

                <label for="title">Title :</label>
                <select id="title" name="title">
                    <option value="Ms." <?php echo (isset($user['title']) && $user['title'] == 'Ms.') ? 'selected' : ''; ?>>Ms.</option>
                    <option value="Mr." <?php echo (isset($user['title']) && $user['title'] == 'Mr.') ? 'selected' : ''; ?>>Mr.</option>
                    <option value="Mrs." <?php echo (isset($user['title']) && $user['title'] == 'Mrs.') ? 'selected' : ''; ?>>Mrs.</option>
                    <option value="Dr." <?php echo (isset($user['title']) && $user['title'] == 'Dr.') ? 'selected' : ''; ?>>Dr.</option>
                </select>

                <!-- Other form fields with their respective values from $user -->
                <label for="designation">Designation :</label>
                <input class="custom-input" type="text" id="designation" name="designation"
                    value="<?php echo isset($user['designation']) ? $user['designation'] : ''; ?>" />

                <label for="department">Department :</label>
                <select id="department" name="department">
                    <option value="Computer Science" <?php echo (isset($user['department']) && $user['department'] == 'Computer Science') ? 'selected' : ''; ?>>Computer Science</option>
                    <option value="English" <?php echo (isset($user['department']) && $user['department'] == 'English') ? 'selected' : ''; ?>>English</option>
                    <option value="Political Science" <?php echo (isset($user['department']) && $user['department'] == 'Political Science') ? 'selected' : ''; ?>>Political Science</option>
                    <option value="Geography" <?php echo (isset($user['department']) && $user['department'] == 'Geography') ? 'selected' : ''; ?>>Geography</option>
                    <option value="Hindi" <?php echo (isset($user['department']) && $user['department'] == 'Hindi') ? 'selected' : ''; ?>>Hindi</option>
                </select>

                <label for="email">Email :</label>
                <input class="custom-input" type="email" id="email" name="email"
                    value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>" />

                <label for="question">Security Question :</label>
                <select id="question" name="question">
                    <option value="pet" <?php echo (isset($user['security_Question']) && $user['security_Question'] == 'pet') ? 'selected' : ''; ?>>What is your pet name</option>
                    <option value="school" <?php echo (isset($user['security_Question']) && $user['security_Question'] == 'school') ? 'selected' : ''; ?>>What is your school name</option>
                    <option value="color" <?php echo (isset($user['security_Question']) && $user['security_Question'] == 'color') ? 'selected' : ''; ?>>What is your favourite color</option>
                </select>

                <label for="answer">Answer :</label>
                <input class="custom-input" type="text" id="answer" name="answer"
                    value="<?php echo isset($user['security_Answer']) ? $user['security_Answer'] : ''; ?>" />




                <!-- Other form fields with their respective values from $user -->
                <div class="label-container1">
                    <label class="label" for="image">Upload image</label>
                    <div class="upload-btn" onclick="chooseFile('image')">
                        Choose file
                        <input type="file" id="image" name="image" accept="image/*" />
                    </div>
                </div>
                <br />

                <div class="label-container2">
                    <label class="label" for="resume">Upload resume PDF</label>
                    <div class="upload-btn" onclick="chooseFile('resume')">
                        Choose file
                        <input type="file" id="resume" name="resume" accept=".pdf" />
                    </div>
                </div>
                <br /><br />
                <button class="addbutton" type="submit"><br>Submit</button>
            </form>
        </div>
    </body>

</html>