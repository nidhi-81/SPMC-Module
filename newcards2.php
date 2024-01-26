<?php
include 'database.php';

// Function to get faculty data for a specific department
function getFacultyDataByDepartment($department)
{
  global $conn;

  // Escape the department variable to prevent SQL injection
  $escapedDepartment = $conn->real_escape_string($department);

  $query = "SELECT * FROM new_faculty_resume WHERE department = '$escapedDepartment'";
  $result = $conn->query($query);

  $facultyList = array();
  while ($row = $result->fetch_assoc()) {
    $facultyList[] = $row;
  }

  return $facultyList;
}

// Check if the 'department' parameter is set in the URL
if (isset($_GET['department'])) {
  // Get the department from the URL
  $department = urldecode($_GET['department']);

  // Fetch faculty data based on the department
  $facultyList = getFacultyDataByDepartment($department);

} else {
  // Handle the case when 'department' parameter is not set
  echo "Department information not provided.";
  exit;
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/fav.png">
    <title>SPM College</title>
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
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

      .nav1 a:hover,
      .dropdown1:hover .dropbtn1 {
        background-color: rgb(165, 164, 164);
      }

      .dropdown-content1 {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

      #hr1 {
        background-color: rgb(6, 0, 91);
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

      .nav2 a:hover,
      .dropdown2:hover .dropbtn2 {
        background-color: rgb(165, 164, 164);
      }

      .dropdown-content2 {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

      .body,
      h1,
      h2,
      h3,
      h4,
      p,
      ul,
      li {
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
        display: flex;

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

      .allcards {
        margin-top: 50px;
        margin-bottom: 50px;

      }

      .threecard {
        display: flex;
        justify-content: center;

      }

      .onecard {
        background-color: white;
        border-radius: 10px;
        width: 300px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        margin: 30px 50px 30px 50px;
        padding: 20px 30px 30px 30px;

      }

      .onecard:hover {
        box-shadow: 0 0 50px rgba(0, 0, 0, 0.6);

      }

      .card-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        margin-bottom: 20px;
      }

      .card-image img {
        width: 100%;
        height: auto;
      }

      .resume {
        border: 2px solid black;
        color: black;
        font-size: 17px;
        border-radius: 20px;
        padding: 10px 10px 10px 10px;
      }

      .resume:hover {
        color: black;
        text-decoration: none;
        border: 3px solid black;
        cursor: pointer;
      }

      #p1 {
        font-size: medium;
        padding-left: 40px;
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

      @media (max-width: 518px) {

        /*done (phone screen)*/
        #img12 {

          width: 200px;
          height: 140px;
          padding-left: 40px;
          margin-bottom: 50px;
        }

        #p1 {
          font-size: medium;
          padding-left: 40px;
          padding-top: 40px;
          color: rgb(29, 88, 190);
          font-family: 'serif';
          font-weight: 700;
        }

        #h21 {
          font-size: 8px;
        }

        #map {
          width: 200px;
        }

        #footimg {
          width: 200px;
        }

      }

      @media (min-width: 518px) and (max-width: 991px) {
        #img12 {

          width: 200px;
          height: 140px;
          padding-left: 40px;
          margin-bottom: 30px;
        }

        #p1 {
          float: right;
          padding-right: 70px;
          padding-top: 70px;
          color: rgb(42, 71, 120);
          font-size: 20px;
          font-family: 'serif';
          font-weight: 700;
        }

        #h21 {
          font-size: larger;
          padding-left: 0;
        }

        #footimg {
          width: 400px;
        }
      }

      @media (min-width: 991px) and (max-width: 1200px) {
        #img12 {

          width: 200px;
          height: 140px;
          padding-left: 40px;
          margin-bottom: 30px;
        }

        #p1 {
          float: right;
          padding-right: 70px;
          padding-top: 70px;
          color: rgb(42, 71, 120);
          font-size: 25px;
          font-family: 'serif';
          font-weight: 700;
        }

        #h21 {
          font-size: larger;
          padding-left: 0;
        }

        #footimg {
          width: 400px;
        }
      }

      @media (min-width: 1200px) {
        #img12 {

          width: 200px;
          height: 140px;
          padding-left: 40px;
          margin-bottom: 30px;
        }

        #p1 {
          float: right;
          padding-right: 70px;
          padding-top: 70px;
          color: rgb(42, 71, 120);
          font-size: 35px;
          font-family: 'serif';
          font-weight: 700;
        }

        #h21 {
          font-size: larger;
          padding-left: 0;
        }

        #footimg {
          width: 400px;
        }
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

      .nav1 a:hover,
      .dropdown1:hover .dropbtn1 {
        background-color: rgb(165, 164, 164);
      }

      .dropdown-content1 {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

      #hr1 {
        background-color: rgb(6, 0, 91);
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

      .nav2 a:hover,
      .dropdown2:hover .dropbtn2 {
        background-color: rgb(165, 164, 164);
      }

      .dropdown-content2 {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

      .body,
      h1,
      h2,
      h3,
      h4,
      p,
      ul,
      li {
        margin: 0;
        padding: 0;
      }

      .body {
        font-family: Arial, sans-serif;
      }

      /* Header styles */
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

      /* Content styles */
      .content {
        display: flex;
        justify-content: space-between;
        padding: 20px;
      }

      .department-box {
        width: 20%;
        background-color: #F5F5F5;
        padding: 20px;
        border-radius: 5px;
      }

      .principal-box {
        background-color: #1E3F72;
        color: #fff;
        padding: 5px;
      }

      .faculty-box {
        background-color: #961a1a;
        color: #fff;
        padding: 5px;
        text-align: center;
      }


      .faculty-info {
        width: 75%;
      }

      .principal h3 {
        color: #f3f7fa;
        margin-bottom: 10px;
        text-align: center;
      }

      .principal p {
        text-align: center;
      }

      .department h3 {
        color: #04090c;
        margin-bottom: 10px;
        text-align: center;
      }

      /* Footer styles */
      footer {
        background-color: #1E3F72;
        color: white;
        padding: 20px;
        display: flex;

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

      .fac-box {
        margin-top: 5px;
      }

      table {

        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
      }

      th,
      td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      th {
        background-color: #f2f2f2;
      }

      tr:hover {
        background-color: #f5f5f5;
      }


      .card::before,
      .card::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transform: scale3d(0, 0, 1);
        transition: transform .3s ease-out 0s;
        background: rgba(255, 255, 255, 0.1);
        content: '';
        pointer-events: none;
      }

      .card::before {
        transform-origin: left top;
      }

      .card::after {
        transform-origin: right bottom;
      }

      .card:hover::before,
      .card:hover::after,
      .card:focus::before,
      .card:focus::after {
        transform: scale3d(1, 1, 1);
      }

      .card-title i:hover {
        transform: scale(1.25) rotate(100deg);
        color: #18d4ca;

      }

      .card:hover {
        transform: scale(1.05);
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
      }
    </style>

<body>

 


    <div class="topbar pt-2 pb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 d-md-block d-none">
                    <div class="top-social">
                        <a href="#"><img src="images/facebook.png"></a>
                        <a href="#"><img src="images/instagram.png"></a>
                        <a href="#"><img src="images/linkedin.png"></a>
                        <a href="#"><img src="images/youtube.png"></a>
                        <a href="#"><img src="images/blogger.png"></a>
                    </div>
                </div>
                <div class="col-md-8 text-md-right text-center right">
                    <a href="login.php">Faculty Login</a>
                    <a href="https://spm.du.ac.in/index.php?option=com_users&amp;view=login&amp;Itemid=203&amp;lang=en">Student Login</a>
                    <a href="https://www.iobnet.co.in/iobpay/entry.do?dirlinkcatcd=EDU&amp;dirlinkmerid=SPMDEL">Fee Payment</a>
                    <a href="https://spm.du.ac.in/index.php?option=com_content&amp;view=article&amp;id=67&amp;Itemid=215&amp;lang=en">RTI</a>
                    <a href="https://spm.du.ac.in/index.php?option=com_content&amp;view=article&amp;id=18:important-links&amp;catid=2:english&amp;lang=en&amp;Itemid=133">Important Links</a>
                    <a href="login.php">Admin</a>
                </div>
            </div>
        </div>
    </div>

    <header class="pt-4 pb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mb-md-0 mb-4 text-center">
                    <h1>SHYAMA PRASAD MUKHERJI COLLEGE</h1>
                    <p>University Of Delhi</p>
                </div>
                <div class="col-md-4 text-center middle my-auto">
                    <img src="images/college_logo.jpeg">
                    <img src="images/delhi-university-new.a77f772708fa.original.png">
                    <img src="images/G20_India_2023_logo.original.png">
                    <img src="images/Azadi_Ka_Amrit_Mahotsav_English_logo.original.png">
                </div>
                <div class="col-md-4 text-center d-md-block d-none">
                    <h1>श्यामा प्रसाद मुखर्जी महाविद्यालय</h1>
                    <p>दिल्ली विश्वविद्यालय</p>
                </div>
            </div>
        </div>
    </header>

    <nav class="pt-2 pb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <i class="fa fa-bars d-xl-none d-inline-block" aria-hidden="true"></i>
                    <ul class="main">
                        
                        <li><a href="index.php">Home</a></li>
                        
                        <li class="zero"><a href="#home">About Us</a>
                        <ul class="one">
                        <li><a href="#">History of the College</a></li>
                        <li><a href="vision&mission.html">Vision and Mission</a></li>
                        <li><a href="governingbody.html">Governing Body</a></li>
                        <li><a href="#">Chairman's Message</a></li>
                        <li><a href="principalsmsg.html">Principal's Message</a></li>
                        <li><a href="Faculty.html">Staff</a></li>  
                        <li><a href="Non-Teaching.html">Non-Teaching</a></li>       
                        <li><a href="College Committees.html">List of Committees</a></li>
                        <li><a href="BOS-AC.html">BOS-AC</a></li>
                        <li><a href="codeofethics.html">Code of Professional Ethics</a></li>
                        <li><a href="#">Infrastructure and Facilities</a></li>
                        <li><a href="SWOC.html">SWOC</a></li>
                        <li><a href="Annual Page.html">Annual Report</a></li>
                        </ul>    
                        </li>
                        
                        <li class="zero"><a href="#home">Administration</a>
                        <ul class="one">
                        <li><a href="Orgstructure.html">Organizational Structure</a></li>
                    <li><a href="Principal.html">Principal</a></li>
                    <li><a href="VicePrincipal.html">Vice Principal</a></li>
                    <li><a href="Librarian.html">Librarian</a></li>
                    <li><a href="AO.html">Administrative Officer (AO)</a></li>
                    <li><a href="LiasonOff.html">Liason Officer</a></li>        
                    <li><a href="MnadateDisclosure.html">Mandatory Disclosure</a></li>
                    <li><a href="Roster.html">Roster</a></li>
                    <li class="two"><a href="#">Appointments</a>
                        <ul>
                            <li><a href="#">Principal</a></li>
                            <li><a href="#">Teaching</a></li>
                            <li><a href="#">Non-Teaching</a></li>
                        </ul>
                    </li>
                        </ul>
                        </li>
                       
                        <li class="zero"><a href="#home">IQAC</a>
                        <ul class="one">
                      <li><a href="overview.html">Overview</a></li>
                    <li><a href="AQAR.html">AQAR</a></li>
                    <li><a href="#">Policies</a></li>
                    <li><a href="#">Institutional Best Practices</a></li>
                    <li><a href="Institutional Distinctiveness.html">Institutional Distinctiveness</a></li>
                    <li><a href="Minutes.html">Meeting Minutes</a> </li>
                        </ul>
                        </li>
                        
                        <li class="zero"><a href="#home">NAAC</a>
                            <ul class="one">
                                <li><a href="#">NAAC-SSR-Report</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="#nirf">NIRF</a></li>
                        
                        <li class="zero"><a href="#nirf">Academics</a>
                        <ul class="one">
                        <li><a href="department.php">Departments</a></li>
                    <li><a href="Courses.html">Courses</a></li>
                    <li><a href="AcadCalender.html">Academic Calender</a></li>
                    <li><a href="Syllabus.html">Syllabus</a></li>
                    <li class="two"><a href="#">Time Table (TT)</a>
                        <ul>
                        <li><a href="#">TT(Jul-Dec 2023)</a></li>
                    <li><a href="#">TT(Jan-Jun 2023)</a></li>
                    <li><a href="#">TT(Jul-Dec 2022)</a></li>
                    <li><a href="#">TT(Jan-Jun 2022)</a></li>
                    </ul>
                    </li>
                    </ul>
                        </li>
                        
                        <li class="zero"><a href="#nirf">Admissions</a>
                        <ul class="one">
                        <li><a href="helpdesk.html">Online Help-desk</a></li>
                    <li><a href="#">Courses Offered</a></li>
                    <li><a href="#">Add-on Courses</a></li>
                    <li><a href="#">Cut-offs</a></li>
                    <li><a href="#">Fee Structure</a></li>
                    <li><a href="#">Prospectus</a></li>
                    <li><a href="#">Committees</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Notices</a></li>
                    <li><a href="#">NEP:UGCF 2022 Syllabi</a></li>
                        </ul>
                        </li>
                        
                        <li class="zero"><a href="#nirf">Students</a>
                        <ul class="one">
                       <li><a href="add on courses.html">Subjects Allotment</a></li>
                    <li>   <a href="attendance.html">Attendance</a></li>
                    <li>  <a href="internal asesment.html">Internal Assessment</a></li>
                    <li> <a href="results.html">Results</a></li>
                    <li>   <a href="awards.html">Awards/Scholarships</a></li>
                    <li>   <a href="grivence cell.html">Grievance Cell</a></li>
                    <li>   <a href="foriegn students registry.html">Foreign Students' Registry</a></li>
                    <li>   <a href="Safety and security.html">Safety and Security</a></li>
                    <li><a href="capability enhancement program.html">Capability Enhancement Program</a></li>
                    <li><a href="student mentorship.html">Student Mentorship</a></li>
                    </ul>
                        </li>
                        
                        <li class="zero"><a href="#nirf">Placement Cell</a>
                            <ul class="one">
                        <li><a href="aboutpcell.html">About Placement Cell</a></li>
                    <li><a href="#">Registration</a></li>
                    <li><a href="internships.html">Internship and Workshops</a></li>
                    <li><a href="contactpcell.html">Contact Placement Cell</a></li>
                    </ul>
                        </li>
                        
                        <li class="zero"><a href="#nirf">Research &amp; Innovation</a>
                            <ul class="one">
                        <li><a href="#">JARHLSS College Journal</a></li>
                    <li>   <a href="Research_publications.html">Research Publications</a></li>
                    <li>   <a href="Research_projects.html">Research Projects</a></li>
                    <li>   <a href="#">Patents</a></li>
                    <li>    <a href="#">Awards and Accolades</a></li>
                    <li>   <a href="#">Memorandum of Understandings (MoUs)</a></li>
                    <li>   <a href="#">National/International Conferences</a></li>
                    <li>   <a href="FDPs.html">Faculty Development Programs (FDPs)</a></li>          
                    <li><a href="Entrepreneurship.html">Internships and Workshops</a></li>
                            </ul>
                        </li>
                        
                        <li class="zero"><a href="#nirf">Co-Curricular</a>
                            <ul class="one">
                            <li><a href="NSS.html">NSS (National Service Scheme)</a></li>
                        <li><a href="NCC.html">NCC (National Cadet Corps)</a></li>
                    <li> <a href="sports.html">Sports</a></li>
                    <li> <a href="studentCouncil.html">Student Council</a></li>
                    <li><a href="DUSU.html">DUSU Elections</a></li>
                    <li> <a href="StudentMagazine.html">College Magazine</a></li>
                    <li> <a href="newsletter.html">Departmental e-Newsletter and Blog</a></li>
                        <li class="two"><a href="#">College Societies/Welfare Committees</a>
                            <ul>
                                <li><a href="#">Debating Society</a></li>
                                <li><a href="#">"Durva": Eco-club Society</a></li>
                                <li><a href="#">"Thirkan": Dance Society</a></li>
                                <li><a href="#">"VOGUISH": Fashion Society</a></li>
                                <li><a href="#">"Artistry": Creative Society</a></li>
                                <li><a href="#">"Navrang": Drama Society</a></li>
                                <li><a href="#">"FASCINATING FLASHES": Photography Club</a></li>
                                <li><a href="#">"TARASH": Personality Development Society</a></li>
                                <li><a href="#">General Knowledge Committee</a></li>
                                <li><a href="#">North-East Cell</a></li>
                                <li><a href="#">"Sambal": Equal Opportunity Cell</a></li>
                                </ul>
                            </li>
                        </ul>  
                        </li>  
                        
                        <li class="zero"><a href="#nirf">Centres</a>
                            <ul class="one">
                                <li><a href="#">NCWEB</a></li>
                                <li><a href="#">SOL</a></li>
                            </ul>
                        </li>  
                        
                        <li><a href="#alumni">Alumni</a></li>  
                    
                    <li class="zero"><a href="#nirf">Facility</a>
                        <ul class="one">
                        <li><a href="medical facility.html">Medical Facility</a></li>
                        <li><a href="Canteen.html">Canteen</a></li>
                    <li>   <a href="bank.html">Bank</a></li>
                    <li>   <a href="Residentialfacilitystaff.html">Residential Facility for Staff</a></li>
                    <li> <a href="Englishlanguagesupportcentre.html">English Language Support Center</a></li>
                       <li><a href="Physical Facility.html">Physical Facilities</a></li>
                      <li><a href="#">IT Infrastructure</a></li>
                       <li class="zero"><a href="#library">Library</a>
                        <ul class="one">
                        <li><a href="About_Library.html">About</a></li>
                    <li> <a href="Annual_Lib_Report.html">Annual Repoprt</a></li>
                    <li>   <a href="Lib_Mem_Registration.html">Member Registration</a></li>
                    <li>   <a href="Lib_Membership_Notice">Membership Notice</a></li>
                    <li>   <a href="Library_Activity.html">Activity</a></li>
                    <li>   <a href="Library_Committee.html">Committee</a></li>
                    <li>   <a href="Linrary_Rules.html">Rules</a></li>
                    <li>   <a href="N-LIST.html">N-LIST</a></li>
                    <li><a href="OPAC.html">OPAC</a></li>
                    </ul>
                    </li>
                    </ul>
                    </li>
                        
                        <li><a href="#contact">Contact</a></li>    
                        </ul>                    
                </div>
            </div>
        </div>
    </nav>


    <?php $i = 0; ?>
    <?php
    echo "<div class='allcards'>";
    foreach ($facultyList as $faculty) {
      if ($i % 3 == 0) {
        echo "<div class='threecard'>";
      }
      echo "<div class='onecard'>";
      if ($faculty['image']) {
        $img = $faculty['image'];
        echo "<div class='card-image'><img src='$img' alt='Avatar' /></div>";
      } else {
        echo
          "<div class='card-image'><img src='' alt=\"Avatar\" /></div>";
      }
      echo "<h3>";
      echo $faculty['name'];
      echo "</h3>";
      echo "<h5>";
      echo $faculty['designation'];
      echo "</h5>";
      echo " <h4>Email ID</h4>";
      echo "<h5>";
      echo $faculty['email'];
      echo "</h5>";
      echo "<h4>Department</h4>";
      echo "<h5>";
      echo $faculty['department'];
      echo "</h5> <br>";
      if ($faculty['resume']) {
        $resume = $faculty['resume'];
        echo "<button class='resume' onclick=\"window.location.href='$resume'\" target=\"_blank\">See More </button>";
      } else {
        echo
          "No resume available";
      }
      echo "</div>";
      if ($i % 3 == 2) {
        echo "</div>";

      }
      $i += 1;
    }
    echo "</div>";

    ?>
           



   

   
   


    <div class="footer-top pt-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-6 mb-5">
                    <ul>
                        <li><a href="#">About SPM</a></li>
                        <li><a href="#">Dr. Shyama Prasad Mukherji</a></li>
                        <li><a href="#">Governing Body</a></li>
                        <li><a href="#">Administration Staff</a></li>
                        <li><a href="#">Mandatory Disclosure</a></li>
                    </ul>
                    <div class="social">
                        <h6>Find us on Google</h6>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224035.9081748121!2d76.82267139453123!3d28.672858600000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03bdaa2376f3%3A0xa147304d775dd37d!2sSPM%20College!5e0!3m2!1sen!2sin!4v1701776104674!5m2!1sen!2sin" width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-4 col-6 mb-5">
                    <ul>
                        <li><a href="#">Faculty</a></li>
                        <li><a href="#">Time Table</a></li>
                        <li><a href="#">Internal Assessment</a></li>
                        <li><a href="#">Attendance</a></li>
                        <li><a href="#">Academic Calendar</a></li>
                        <li><a href="#">Tenders & Quotations</a></li>
                        <li><a href="#">E-Procurement</a></li>
                        <li><a href="#">Ordinance</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Download Forms</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-6 mb-5">
                    <ul>
                        <li><a href="#">Awards/Scholarships</a></li>
                        <li><a href="#">Student Council</a></li>
                        <li><a href="#">Student Related Committees</a></li>
                        <li><a href="#">Student Grievance Redressal Form</a></li>
                        <li><a href="#">Appointment/Vacancies</a></li>
                        <li><a href="#">International Student Enquiries</a></li>
                        <li><a href="#">Leave Form</a></li>
                        <li><a href="#">Archive</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Quick Links</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/script.js"></script>
    
</body>
</html>