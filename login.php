<?php
include('database.php');

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $admin_table_name = 'new_faculty_admin';
  $faculty_table_name = 'new_faculty_resume';

  $admin_query = $conn->prepare("SELECT * FROM $admin_table_name WHERE username = ? LIMIT 1");
  $admin_query->bind_param("s", $username);
  $admin_query->execute();
  $admin_result = $admin_query->get_result();

  $faculty_query = $conn->prepare("SELECT * FROM $faculty_table_name WHERE username = ? LIMIT 1");
  $faculty_query->bind_param("s", $username);
  $faculty_query->execute();
  $faculty_result = $faculty_query->get_result();

  if ($admin_result->num_rows > 0) {
      $user = $admin_result->fetch_assoc();

      if ($password == $user['password']) {
        header('Location: DashAdmin.php');
            exit();
      } else {
          $error_message = 'Invalid password. Please try again.';
      }
  } elseif ($faculty_result->num_rows > 0) {
      $user = $faculty_result->fetch_assoc();

      if ($password == $user['password']) {
        header('Location: DashFaculty.php?username=' . $username);
        exit();
      } else {
          $error_message = 'Invalid password. Please try again.';
      }
  } else {
      $error_message = 'User does not exist. Please try again.';
  }
}


// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="username" name="username" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="pass"><a href="username_verify.php">Forgot password?</a></div>
                <div class="row button">
                    <input type="submit" value="Login">
</div>
            </form>

            <?php
            // Display error message if any
            if ($error_message !== "") {
                echo '<p class="error">' . $error_message . '</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background: #fff;
  overflow: hidden;
}
::selection{
  background: #4070f4;
}

.error{
       text-align: center;
       
      color: red;
      }

.container{
  max-width: 440px;
  padding: 0 px;
  margin: 100px auto;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: #4070f4;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #4070f4;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #4070f4;
  border: 1px solid #4070f4;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #4070f4;
  border: 1px solid #4070f4;
  cursor: pointer;
}
form .button input:hover{
  background: #12876f;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}

</style> 

      


