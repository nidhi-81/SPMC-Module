<?php
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database.php';

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $question = mysqli_real_escape_string($conn, $_POST["security_Question"]);
    $answer = mysqli_real_escape_string($conn, $_POST["security_Answer"]);

    // Check if the username already exists
    $check_username_query = "SELECT * FROM new_faculty_resume WHERE username='$username' AND security_Question='$question' AND security_Answer='$answer'";
    $check_username_result = mysqli_query($conn, $check_username_query);
    $num_existing_users = mysqli_num_rows($check_username_result);

    if ($num_existing_users > 0) {
       
        header("Location: reset_password.php?username=$username");
        exit();
    } else {
        // Username or security question/answer is incorrect
        $showError = "Invalid credentials. Please try again.";
    }

    mysqli_close($conn);
}
?>
<!doctype html>
<html>
<head>
    <title>User Verify</title>
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
    <script>
         function chooseFile(inputId) {
    document.getElementById(inputId).click();
  }

    </script>
</head>
<body>
<div class='form'>
    <form action="username_verify.php" method="POST">
        <h2>User Verification</h2><br>
        <div class='field'>
            <label for='username'>Username :</label>
            <input type='text' name='username' required></input> <br>
        </div>
        <div class="field">
        <label for="Security">Security Question</label>
        <select id="security" name="security_Question">
          <option value="pet">What is your pet name</option>
          <option value="school">what is your school name</option>
          <option value="color">What is your favourite color</option>
        </div>
      </select>
      <div class="field">
      <label for="answer">Answer</label>
        <input
                class="custom-input"
                type="text"
                id="name"
                name="security_Answer"
                required
        />
    </div>
        
        <br>
        <div class='field1'>
            
            <input class='button' type="submit" name="save" value="Verify">
        </div>
      
    </form>
</div>
<script>

</script>
</body>
</html>