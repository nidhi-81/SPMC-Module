<?php
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css"/>
    <title>Custom Bootstrap 4 card</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="css/faculty.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

/* CSS */
.button-27 {
  appearance: none;
  background-color: #000000;
  border: 2px solid #1A1A1A;
  border-radius: 15px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 16px;
  font-weight: 600;
  line-height: normal;
  margin: 0;
  min-height: 60px;
  min-width: 0;
  outline: none;
  padding: 16px 24px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
  will-change: transform;
}

.button-27:disabled {
  pointer-events: none;
}

.button-27:hover {
  box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
  transform: translateY(-2px);
}

.button-27:active {
  box-shadow: none;
  transform: translateY(0);
}
.nav2{
  background-color: rgb(6, 0, 91);
  width: 100%;
  height: 50px;
}
html {
    font-size: 14px;
  }
  body {
  font-family: Arial, Helvetica, sans-serif;
}

.nav1 {
  overflow: hidden;
  background-color: #ffffff;
}

.nav1 a {
  float: right;
  font-size: 16px;
  color: rgb(0, 0, 0);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.dropdown1 {
  float: right;
  overflow: hidden;
}

.dropdown1 .dropbtn1 {
  font-size: 16px;  
  border: none;
  outline: none;
  color: rgb(0, 0, 0);
  padding: 14px 30px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.nav1 a:hover, .dropdown1:hover .dropbtn1 {
  background-color: rgb(165, 164, 164);
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a {
  float: none;
  color: rgb(0, 0, 0);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content1 a:hover {
  background-color: #ddd;
}

.dropdown1:hover .dropdown-content1 {
  display: block;
}
#hr1
{
    background-color:  rgb(6, 0, 91);
    padding: 4px 4px;
    margin-top: 0px;
}
.nav2 {
  overflow: hidden;
  background-color: rgb(35, 30, 104);
  margin: 0;
}


.dropdown2 {
  float: left;
  overflow: hidden;
  padding-left: 0%;
}

.dropdown2 .dropbtn2 {
  font-size: 16px;  
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  padding: 14px 30px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.nav2 a:hover, .dropdown2:hover .dropbtn2 {
  background-color: rgb(165, 164, 164);
}

.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content2 a {
  float: none;
  color: rgb(0, 0, 0);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content2 a:hover {
  background-color: #ddd;
}

.dropdown2:hover .dropdown-content2 {
  display: block;
}
.body, h1, h2, h3, h4, p, ul, li {
    margin: 0;
    padding: 0;
  }
  
  .body {
    font-family: Arial, sans-serif;
  }
    
  .header {
    background-color: #1E3F72;
    color: #fff;
    padding: 10px;
  }
  .nav-bar {
    display: flex;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    text-align: center;
    background-color: #003266;
    padding: 10px;
  }
  .nav-bar li {
    display: inline-flex;
    list-style: none;
  }
  
  .nav-bar a {
    color: white;
    text-decoration: none;
    padding: 10px;
  }
  .nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  .nav ul li {
    display: inline-block;
    margin-right: 20px;
  }
  
 
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #003266;
    border-radius: 4px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
    margin: 10px;
  }
  
  .dropdown-content li {
    display: block;
    padding: 8px;
  }
  
  .dropdown-content a {
    color: white;
    text-decoration: none;
  }
  
 footer {
    background-color: #1E3F72;
    color: white;
    padding: 20px;  
    flex-direction :column;

  }

  .map {
    width: 50%;
  }

  .map img {
    width: 100%;
    height: auto;
  }

  .contact-image {
    width: 40%;
  }
  
.allcards{
    flex-direction:column;
    margin-top: 50px;
  margin-bottom: 50px;    
  
}
.threecard{
  display:flex;
  justify-content: center;

}
  .onecard{

      
  
    
    background-color: white;    
    border-radius: 10px;
    width: 300px;
  box-shadow: 0 0 10px rgba(0,0,0,0.6);
  margin: 30px 50px 30px 50px;
  padding: 20px 30px 30px 30px;

  }
  .onecard:hover{
  box-shadow: 0 0 50px rgba(0,0,0,0.6);

  }
  .card-image{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 20px;
  }
  .card-image img{
    width: 100%;
    height: auto;
  }
  .resume{    
    border: 2px solid black;
    color:black;
    font-size: 17px;
    border-radius: 20px;
    padding: 10px 10px 10px 10px;
  }
  .resume:hover{
    color: black;
    text-decoration: none;
    border: 3px solid black;
    cursor: pointer;
  }
  #p1
  {
    font-size: medium;
    padding-left:40px ;
    padding-top: 40px;
    color: rgb(29, 88, 190);
    font-family: 'serif';
    font-weight: 700;
  }

  html {
    font-size: 14px;
  }
  
  .container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
  }

  .card-custom {
  overflow: hidden;
  min-height: 450px;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
}

.card-custom-img {
  height: 200px;
  min-height: 200px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  border-color: inherit;
}

/* First border-left-width setting is a fallback */
.card-custom-img::after {
  position: absolute;
  content: '';
  top: 161px;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-top-width: 40px;
  border-right-width: 0;
  border-bottom-width: 0;
  border-left-width: 545px;
  border-left-width: calc(575px - 5vw);
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  border-left-color: inherit;
}

.card-custom-avatar img {
  border-radius: 50%;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
  position: absolute;
  top: 100px;
  left: 1.25rem;
  width: 100px;
  height: 100px;
}
.nav-bar li {
    display: inline-flex;
    list-style: none;
  }
  
  .nav-bar a {
    color: white;
    text-decoration: none;
    padding: 10px;
  }
  .nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  .nav ul li {
    display: inline-block;
    margin-right: 20px;
  }
  
 
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #003266;
    border-radius: 4px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
    margin: 10px;
  }
  
  .dropdown-content li {
    display: block;
    padding: 8px;
  }
  
  .dropdown-content a {
    color: white;
    text-decoration: none;
  }
  
 footer {
    background-color: #1E3F72;
    color: white;
    padding: 20px;  
    flex-direction :column;

  }

  .map {
    width: 50%;
  }

  .map img {
    width: 100%;
    height: auto;
  }

  .contact-image {
    width: 40%;
  }
  
.allcards{
    flex-direction:column;
    margin-top: 50px;
  margin-bottom: 50px;    
  
}
.threecard{
  display:flex;
  justify-content: center;
  flex-direction:row;

}
  .onecard{
    background-color: white;    
    border-radius: 10px;
    width: 300px;
  box-shadow: 0 0 10px rgba(0,0,0,0.6);
  margin: 30px 50px 30px 50px;
  padding: 20px 30px 30px 30px;

  }
  .onecard:hover{
  box-shadow: 0 0 50px rgba(0,0,0,0.6);

  }
  .card-image{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 20px;
  }
  .card-image img{
    width: 100%;
    height: auto;
  }
  .resume{    
    border: 2px solid black;
    color:black;
    font-size: 17px;
    border-radius: 20px;
    padding: 10px 10px 10px 10px;
  }
  .resume:hover{
    color: black;
    text-decoration: none;
    border: 3px solid black;
    cursor: pointer;
  }
  #p1
  {
    font-size: medium;
    padding-left:40px ;
    padding-top: 40px;
    color: rgb(29, 88, 190);
    font-family: 'serif';
    font-weight: 700;
  }

  html {
    font-size: 14px;
  }
  
  .container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
  }

  .card-custom {
  overflow: hidden;
  min-height: 450px;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
}

.card-custom-img {
  height: 200px;
  min-height: 200px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  border-color: inherit;
}

/* First border-left-width setting is a fallback */
.card-custom-img::after {
  position: absolute;
  content: '';
  top: 161px;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-top-width: 40px;
  border-right-width: 0;
  border-bottom-width: 0;
  border-left-width: 545px;
  border-left-width: calc(575px - 5vw);
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  border-left-color: inherit;
}

.card-custom-avatar img {
  border-radius: 50%;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
  position: absolute;
  top: 100px;
  left: 1.25rem;
  width: 100px;
  height: 100px;
}

@media (max-width: 518px) { /*done (phone screen)*/
  #img12
{
    
    width: 200px;
    height: 140px;
    padding-left: 40px;
    margin-bottom: 50px;
}
  #p1
  {
    font-size: medium;
    padding-left:40px ;
    padding-top: 40px;
    color: rgb(29, 88, 190);
    font-family: 'serif';
    font-weight: 700;
  }
  #h21
  {
    font-size: 8px;
  }
  #map
  {
    width:200px;
  }
  #footimg
  {
    width: 200px;
  }
  
}

@media (min-width: 518px) and (max-width: 991px) {
  #img12
  {
      
      width: 200px;
      height: 140px;
      padding-left:40px;
      margin-bottom: 30px;
  }
  #p1
  {
      float:right;
      padding-right:70px ;
      padding-top: 70px;
      color: rgb(42, 71, 120);
      font-size:20px;
      font-family: 'serif';
      font-weight: 700;
  }
  #h21
  {
    font-size: larger;
    padding-left:0;
  }
  #footimg
  {
    width: 400px;
  }
}
 
</style>
</head>

<body>
<div class="nav1">
    <div class="dropdown1">
        <button class="dropbtn1">Login
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content1">
            <a href="login.php">Admin</a>
            <a href="login.php">Faculty</a>
           
        </div>
    </div>

    <a href="#contact">Contact Us <i class="fa fa-phone"></i></a>

    <a href="/">Home <i class="fa fa-home"></i></a>


</div>
<hr id="hr1">
<div class="Div2">
    <h1 id="p1">SHYAMA PRASAD MUKHERJI COLLEGE FOR WOMEN</h1>
    <img id="img12" src="img\spmc_logo.png">

</div>
<div class="nav2">
    <div class="dropdown2">
        <button class="dropbtn2">Department & Faculty
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content2">
            <a href="department.php">Department</a>
            <a href="view_faculty.php">Faculty</a>
        </div>
    </div>
</div>
<?php

// Fetch faculty member details from the database
$sql = "SELECT * FROM new_faculty_resume";
$result = $conn->query($sql);
$counter=1;
// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>
<div class='allcards'>
    <div class='threecard'>

        <?php foreach ($result as $faculty): ?>
            <div class='onecard'>

                <?php if ($faculty['image']): ?>
                    <div class='card-image'><img src="<?php echo $faculty['image']; ?>" alt="Avatar"/></div>
                <?php else: ?>
                    <div class='card-image'><img src="" alt="Avatar"/></div>
                <?php endif; ?>
                <h3><?php echo $faculty['name']; ?></h3>
                <h5><?php echo $faculty['designation']; ?></h5>
                <h4>Email ID</h4><h5><?php echo $faculty['email']; ?></h5>
                <h4>Department</h4><h5><?php echo $faculty['department']; ?></h5>    <br>
                
                <?php if ($faculty['resume']): ?>
                    <button class='resume' onclick="window.location.href='<?php echo $faculty['resume']; ?>'" target="_blank">See More
                    </button>
                <?php else: ?>
                    No resume available
                <?php endif; ?>

            </div>
            
            <?php
                if ($counter % 3 === 0 && $counter !== $result->num_rows):
                    ?>
                    </div>
                    <div class='threecard'>
                <?php endif; ?>
<BR>
                <?php
                $counter++; // Increment the counter at the end of each iteration
            
        
        ?>
        
        <br><br>
    <div class='threecard'>
        
        <?php endforeach; ?>
    </div>            
</div>


        <?php
    }
  }else {
    echo "No faculty members found in the database.";
}

// Close the database connection
$conn->close();
?>
</div>
<footer id="footer1" class="text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <iframe id="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.5609087897083!2d77.12496707388017!3d28.67286328225099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03bd392e758f%3A0x6bf7748ebacf9fa!2sShyama%20Prasad%20Mukherji%20College%20for%20Women%20(Girls)!5e0!3m2!1sen!2sin!4v1691574636886!5m2!1sen!2sin"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div id='text' class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <img id="footimg" style="height: 150px; padding-bottom: 5px;" src="img/Spm pic1.jpeg">
                    <h5 class="text-uppercase">SHYAMA PRASAD MUKHERJI COLLEGE FOR WOMEN</h5>

                    <p>
                        West Punjabi Bagh, Punjabi Bagh

                    </p>
                    <p>
                        Delhi-110026, India
                    </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ©SPMC. All Rights Reserved
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer and other static content remains the same -->
</body>
</html>