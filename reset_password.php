<?php
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database.php';

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["new_pass"]);
    $cpassword = mysqli_real_escape_string($conn, $_POST["confirm_pass"]);

    // Check if the username already exists
    $check_username_query = "SELECT * FROM new_faculty_resume WHERE username='$username'";
    $check_username_result = mysqli_query($conn, $check_username_query);
    $num_existing_users = mysqli_num_rows($check_username_result);

    if ($num_existing_users > 0 && $password == $cpassword) {
        // Update password if username exists and passwords match
        $sql = "UPDATE new_faculty_resume SET password='$password' WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $showAlert = true;
        } else {
            $showError = "Error: " . mysqli_error($conn);
        }
    } else {
        $showError = "Passwords do not match or username does not exist";
    }

    mysqli_close($conn);
}
?>

<!doctype html>
<html>
<head>
    <title>Reset password</title>
    <style>
            .form{
                background-color: white;
                box-shadow: 0 0 30px lightgray;
                border-radius: 20px;
                width: 30%;              
                padding: 20px 0 20px 20px;      
                margin-top: 200px;
                margin-left: 500px;
                
            }
            .field{
                margin:20px 20px 20px 20px;
            }
            label{
                font-size: 18px;
            }
            .button{
                border: 3px solid #2093c3;
                color: #2093c3;
                background-color: white;
                border-radius: 10px;    
                padding: 10px 10px 10px 10px;  
                font-weight: bold;  

            }
            .button:hover{
                box-shadow: 0 0 5px #2093c3;
                cursor:pointer;
            }
            input{                
                border: 1px solid gray;
                border-radius: 5px;
            }
            form{
                justify-content: center;
            }
            h2{
                margin-left: 140px;
            }
            .field1{
                margin-left: 180px;                            
            }            

    </style>
</head>
<body>
    <?php
  if ($showAlert) {
    echo '<strong><style="color: green"Success!</strong> Your password is successfully updated.';
}
if ($showError) {
    echo '<strong><style="color:red"Error!</strong> ' . $showError;
}
?>

    
<div class='form'>
    <form action="reset_password.php" method="POST">
       
        <h2>Reset Password</h2><br>
        <div class='field'>
            <label for='username'>username</label>
            <input type='text' name='username' required></input> <br>
        </div>
        <div class='field'>
            <label for='newpassword'>new password</label>
            <input type='password' name='new_pass' required></input> <br>
        </div>
        <div class='field'>
            <label for='confirm_pass'>confirm password</label>
            <input type='password' name='confirm_pass' required></input> <br>
        </div>
        
        
        <br>
        <div class='field1'>
            <input class='button' type="submit" name="save" value="reset">
        </div>
    </form>
</div>
<script>

</script>
</body>
</html>