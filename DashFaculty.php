<?php
include "fetch_data.php"
  ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  </head>

  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="#" class="logo">
              <?php if (!empty($user['image'])): ?>
                <img src='<?php echo $user['image']; ?>' alt='<?php echo $user['name']; ?>'>
              <?php else: ?>
                <img src='img/user.png' alt="NA">
              <?php endif; ?>
            </a>
          </li>
          <li>
          <?php
          if (!empty($user['resume'])): ?>
            <a href="<?php echo $user['resume']; ?>" target='_blank'>
            <i class="fas fa-file"></i>
              <span class="nav-item">resume</span></a>
          <?php else: ?>
            <a href="#">No resume available</a>
          <?php endif; ?>
          </li>
          <li>
            <?php $Uname = $username; ?>
            <a href="<?php echo 'add_faculty_form2.php?username=' . $Uname; ?>">
              <i class="fas fa-user"></i>
              <span class="nav-item">Update Details</span>
            </a>
          </li>
          <li>
            <a href="index.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main">
        <div class="main-top">
          <h1>DashBoard</h1>
          <i class="fas fa-user-cog"></i>
        </div>

        <div class="main-skills">
          <div class="card">

            <?php
            if (!empty($user['resume'])): ?>
              <a href="<?php echo $user['resume']; ?>" target='_blank'>
              <i class="fas fa-file"></i>
              <h3>resume<h3>
              
              </a>
            <?php else: ?>
              <a href="#"><h3>No resume available<h3></a>
            <?php endif; ?>
          </div>

          <div class="card">
            <?php $Uname = $username; ?>
            <a href="<?php echo 'add_faculty_form2.php?username=' . $Uname; ?>">
              <i class="fas fa-file"></i>
              <h3>Update Personal Details</h3>
            </a>


          </div>
        </div>

        <section class="main-course">
          <h1>Personal Details</h1>
          <div class="course-box">
            <div class="course">
              <div class="box">
                <h2>Name</h2>
                <h3><?php echo $user['name']; ?></h3>
                <br>
                <h2>Designation</h2>
                <h3><?php echo $user['designation']; ?></h3>
                <br>
                <h2>Department</h2>
                <h3><?php echo $user['department']; ?></h3>
                <br>
                <h2>Email </h2>
                <h3><?php echo $user['email']; ?></h3>
                <br>
              </div>
            </div>
          </div>
        </section>
      </section>
    </div>
  </body>

</html>


<style>
  /*  import google fonts */
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");

  * {
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    text-decoration: none;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  body {
    background: #dfe9f5;
  }

  .container {
    display: flex;
  }

  nav {
    position: relative;
    top: 0;
    bottom: 0;
    height: 100vh;
    left: 0;
    background: #fff;
    width: 280px;
    overflow: hidden;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  }

  .logo {
    text-align: center;
    display: flex;
    margin: 10px 0 0 10px;
  }

  .logo img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
  }

  .logo span {
    font-weight: bold;
    padding-left: 15px;
    font-size: 12px;
    text-transform: uppercase;
  }

  a {
    position: relative;
    color: rgb(85, 83, 83);
    font-size: 14px;
    display: table;
    width: 280px;
    padding: 10px;
  }

  nav .fas {
    position: relative;
    width: 70px;
    height: 40px;
    top: 14px;
    font-size: 20px;
    text-align: center;
  }

  .nav-item {
    position: relative;
    top: 12px;
    margin-left: 10px;
  }

  a:hover {
    background: #eee;
  }

  .logout {
    position: absolute;
    bottom: 0;
  }

  /* Main Section */
  .main {
    position: relative;
    padding: 20px;
    width: 100%;
  }

  .main-top {
    display: flex;
    width: 100%;
  }

  .main-top i {
    position: absolute;
    right: 0;
    margin: 10px 30px;
    color: rgb(110, 109, 109);
    cursor: pointer;
  }

  .main-skills {
    display: flex;
    margin-top: 20px;


  }

  .main-skills .card {
    width: 55%;
    margin-left: 10px;
    background: #fff;
    text-align: center;
    border-radius: 20px;
    padding: 10px;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  }

  .main-skills .card h3 {
    margin: 10px;
    text-transform: capitalize;
  }

  .main-skills .card p {
    font-size: 12px;
  }

  .main-skills .card i {
    font-size: 22px;
    padding: 10px;
  }

  /* Courses */
  .main-course {
    width: 60%;
    height: 100%;
    margin-top: 20px;
    text-transform: capitalize;
  }

  .course-box {
    width: 100%;
    height: 600px;
    padding: 10px 10px 30px 10px;
    margin-top: 10px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  }

  .course-box ul {
    list-style: none;
    display: flex;
  }

  .course-box ul li {
    margin: 10px;
    color: gray;
    cursor: pointer;
  }

  .course-box ul .active {
    color: #000;
    border-bottom: 1px solid #000;
  }

  .course-box .course {
    display: flex;
  }

  .box {
    width: 50%;
    padding: 30px;
    margin: 10px;
    border-radius: 10px;
    background: rgb(235, 233, 233);
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  }

  .box p {
    font-size: 12px;
    margin-top: 5px;
  }

  .box button {
    background: #000;
    color: #fff;
    padding: 7px 10px;
    border-radius: 10px;
    margin-top: 3rem;
    cursor: pointer;
  }

  .box button:hover {
    background: rgba(0, 0, 0, 0.842);
  }

  .box i {
    font-size: 7rem;
    float: right;
    margin: -20px 20px 20px 0;
  }

  .html {
    color: rgb(25, 94, 54);
  }

  .css {
    color: rgb(104, 179, 35);
  }

  .js {
    color: rgb(28, 98, 179);
  }
</style>