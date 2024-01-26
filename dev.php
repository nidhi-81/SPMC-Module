<?php
session_start();

// // Fetch user data from the session
// $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

// // Check if the username is set in the URL
// $editUsername = isset($_GET['username']) ? $_GET['username'] : '';

// Fetch user details from the database based on the username
include 'database.php';
$query_fetch_user = $conn->prepare("SELECT * FROM new_faculty_resume WHERE username = ?");
$query_fetch_user->bind_param('s', $editUsername);
$query_fetch_user->execute();
$result_fetch_user = $query_fetch_user->get_result();

// Check if user details are found
if ($result_fetch_user->num_rows > 0) {
    $user = $result_fetch_user->fetch_assoc();
} else {
    // User not found, you can handle this case accordingly
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <font color="red"><strong>ERROR!!</strong> User not found</font>
        </div>';
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'database.php';
    include 'fetch_data.php';
    include 'departmentwise.php';

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


    echo " value of imagetempname is :",$imageTempName;
    $imageUploadPath = 'uploads/images/' . $imageFileName;
    $resumeUploadPath = 'uploads/resumes/' . $resumeFileName;

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
        if (!empty($imageFileName)) {
            move_uploaded_file($imageTempName, $imageUploadPath);
            $sql .= ", image='$imageFileName'";
        }

        // Check if resume is uploaded
        if (!empty($resumeFileName)) {
            move_uploaded_file($resumeTempName, $resumeUploadPath);
            $sql .= ", resume='$resumeFileName'";
        }

        $sql .= " WHERE username='$username'";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Update successful
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <font color="green"><strong>SUCCESS!!</strong> Record updated successfully</font>
                </div>';

            // Redirect to tbfac.php
            header('Location: tbfac.php?department=' . urlencode($department));
            exit();
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