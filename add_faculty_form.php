<!DOCTYPE html>
<html>

  <head>
    <title>Add User Form</title>
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
      <h1>
        <center />
        Add faculty
      </h1>
      <?php
      include 'departmentwise.php';
      if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = 'websitedb';
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $username = $_POST["username"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $title = $_POST["title"];
        $designation = $_POST["designation"];
        $department = $_POST["department"];
        $email = $_POST["email"];
        $ans = $_POST["ans"];
        $security = $_POST["security"];
        $imageFileName = $_FILES['image1']['name'];
        $resumeFileName = $_FILES['resume1']['name'];


        $imageTempName = $_FILES['image1']['tmp_name'];
        $resumeTempName = $_FILES['resume1']['tmp_name'];

        $imageUploadPath = 'uploads/images/' . $imageFileName;
        $resumeUploadPath = 'uploads/resumes/' . $resumeFileName;



        if ($imageFileName && $resumeFileName) {

          $sql = "INSERT INTO new_faculty_resume(username, password, name, department, designation, title, email, resume, image, security_Answer, security_Question) VALUES ('$username', '$password', '$name','$department', '$designation','$title', '$email','$resumeUploadPath', '$imageUploadPath','$ans','$security')";

          move_uploaded_file($imageTempName, $imageUploadPath);
          move_uploaded_file($resumeTempName, $resumeUploadPath);

        } elseif ($imageFileName) {
          $sql = "INSERT INTO new_faculty_resume(username, password, name, department, designation, title, email, image, security_Answer, security_Question) VALUES ('$username', '$password', '$name','$department', '$designation','$title', '$email', '$imageUploadPath','$ans','$security')";

          move_uploaded_file($imageTempName, $imageUploadPath);
        } elseif ($resumeFileName) {
          $sql = "INSERT INTO new_faculty_resume(username, password, name, department, designation, title, email, resume, security_Answer, security_Question) VALUES ('$username', '$password', '$name','$department', '$designation','$title', '$email', '$resumeUploadPath','$ans','$security')";

          move_uploaded_file($resumeTempName, $resumeUploadPath);
        } else {
          $sql = "INSERT INTO new_faculty_resume(username, password, name, department, designation, title, email, security_Answer, security_Question) VALUES ('$username', '$password', '$name','$department', '$designation','$title', '$email','$ans','$security')";

        }

        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        if ($result) {

          header('Location: tbfac2.php');
          exit;

        }
      }



      ?>

      <form action="add_faculty_form.php" method="post" enctype="multipart/form-data">


        <label for="username">Username :</label>
        <input class="custom-input" type="text" id="username" name="username" required />
        <label for="password">Password :</label>
        <input class="custom-input" type="text" id="password" name="password" required />

        <label for="name">Full Name :</label>
        <input class="custom-input" type="text" id="name" name="name" required />

        <label for="title">Title :</label>
        <select id="title" name="title">
          <option value="Ms.">Ms.</option>
          <option value="Mr.">Mr.</option>
          <option value="Mrs.">Mrs.</option>
          <option value="Dr.">Dr.</option>
        </select>

        <label for="designation">Designation :</label>
        <input class="custom-input" type="text" id="designation" name="designation" />

        <label for="department">Department :</label>
        <select id="department" name="department">
          <option value="Computer Science">Computer Science</option>
          <option value="English">English</option>
          <option value="Political Science">Political Science</option>
          <option value="Geography">Geography</option>
          <option value="Hindi">Hindi</option>
        </select>

        <label for="email">Email :</label>
        <input class="custom-input" type="email" id="email" name="email" />
        <label for="Security">Security Question</label>
        <select id="security" name="security">
          <option value="pet">What is your pet name</option>
          <option value="school">what is your school name</option>
          <option value="color">What is your favourite color</option>

        </select>
        <label for="ans">Answer</label>
        <input class="custom-input" type="text" id="ans" name="ans" required />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="label-container1">
          <label class="label" for="image1">Upload image</label>
          <div class="upload-btn" onclick="chooseFile('image1')">
            Choose file
            <input type="file" id="image1" name="image1" accept="image/*" />
          </div>
        </div>
        <br />

        <div class="label-container2">
          <label class="label" for="resume1">Upload resume PDF</label>
          <div class="upload-btn" onclick="chooseFile('resume1')">
            Choose file
            <input type="file" id="resume1" name="resume1" accept=".pdf" />
          </div>
        </div>
        <br /><br />
        <button class="addbutton" type="submit"><b />Submit</button>
      </form>
    </div>



  </body>

</html>