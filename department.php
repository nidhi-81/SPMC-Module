<?php
// Include the database connection file
include 'database.php';

// Fetch data from the new_faculty_resume table
$query = "SELECT department, COUNT(department) AS total_faculty FROM new_faculty_resume GROUP BY department";
$result = mysqli_query($conn, $query);

$departments = array();
while ($row = mysqli_fetch_assoc($result)) {
    $department = $row['department'];

    // Fetch department image from the department_image table
    $imageQuery = "SELECT image FROM department WHERE department_name = '$department'";
    $imageResult = mysqli_query($conn, $imageQuery);
    $imageRow = mysqli_fetch_assoc($imageResult);

    $departmentImage = !empty($imageRow['image']) ? $imageRow['image'] : "department/department.webp";

    $departments[] = array(
        'department' => $department,
        'total_faculty' => $row['total_faculty'],
        'department_image' => $departmentImage,
    );
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <title>Faculty Department Page</title>
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

html {scroll-behavior: smooth;}
*{box-sizing: border-box;outline: none; transition: all .3s;-o-transition: all .3s;-webkit-transition: all .3s;-ms-transition: all .3s;}

body{font-size: 14px;}
h1, h2, h3, h4 , h5, h6, strong{font-weight: 700;}
a{color: black;line-height: initial;}
a:hover{color:initial; text-decoration:none}
p{color: black;}
p:last-child{margin: 0}
label{font-size: 12px;margin-bottom: 5px;text-transform: uppercase;}
img, iframe{max-width: 100%; vertical-align: middle;}
ul{padding-left: 16px;margin: 0;}
ul li{color: black;}
input, textarea, select{border-radius: 0;border: 1px solid rgb(199 199 199);font-size: 14px;height: initial;padding: 8px 10px;width: 100%;background: #fff}
input[type=submit], button{width:auto; border:0; cursor:pointer}
textarea{height:100px;}
video{width: 100%; vertical-align: middle;}
hr{width: 100%; float: left;}
.btn-primary{background: #eb2125;border: 0;font-size: 12px;padding: 10px 20px;}
.btn-primary:hover{background: #000}

.owl-nav{position: absolute;left: 0;top: 50%;width: 100%;}
.owl-nav button{}
.owl-nav button i{text-align: center;display: block;font-size: 40px;padding: 0px;transition: all .2s;}
.owl-nav button i:hover{color:red}
.owl-nav button.owl-prev{position: absolute;left: -40px;}
.owl-nav button.owl-next{position: absolute;right: -40px;}

.owl-dots{position: absolute;bottom: 10px;width: 100%;text-align: center;display: none;}
.owl-dots button{margin: 0 5px;}
.owl-dots button span{width: 14px;height: 14px;display: block;background: whitesmoke;border-radius: 5px;}
.owl-dots button.active{}
.owl-dots button.active span{background: #EB2125;}
.owl-dots button span:hover{background: #023575;}
.owl-carousel .owl-stage, .owl-carousel.owl-drag .owl-item{ -ms-touch-action: auto; touch-action: auto;}

.container-fluid{}
.bg-light{background: #f8faff!important}

.topbar{background:black;}
.topbar .right a{padding: 5px 10px;background: #EB2125;border-radius: 5px;display: inline-block;}
.topbar *{color:#fff}
.topbar .top-social{}
.topbar .top-social a{margin-right: 10px}
.topbar .top-social img{height: 25px}

header{}
header h1{color:#EB2125;line-height: 1;}
header p{font-weight:bold; font-size:20px;}
header .middle{}
header .middle img{height: 65px;border: 1px solid #dadada;border-radius: 5px;margin: 0 5px;padding: 6px;}

nav{background:#EB2125}
nav .fa-bars{font-size: 30px;}
nav .fa-bars.x:before{content: '\f00d';}
nav *{color:#fff}
nav ul{padding: 0;list-style: none;display: flex;}
nav ul li{flex: 1 1 auto;text-align: center;position: relative;}
nav ul li a{display: block;padding: 15px 5px;}
nav ul li.zero > a:after, nav ul li.two > a:after{content:'\f107';font-family: 'FontAwesome';padding-left: 5px;}

nav ul ul, nav ul ul ul{display: none;}
nav ul ul ul{display:none!important}

nav ul ul a{color:#000;text-align:left;padding: 10px 10px;border-bottom: 1px solid #d4d4d4;}
nav ul ul a:hover{background:whitesmoke; color:#EB2125}
nav .zero:hover ul{display:block;position: absolute;left: 0;top: 45px;background: #fff;z-index: 9;width: 200px;}

nav .one li:hover ul{display:block!important;top: initial;bottom: 0;left: 195px;}

.box{}
.box h4{margin:0}
.box .border:hover{background: #EB2125}
.box .border:hover h4{color: #fff}

.intro h2, .intro h4{color:#EB2125}
.intro h4{margin:0}

.notice{}
.notice h2{background:#EB2125;color: #fff;text-align: center;font-size: 22px;padding: 10px 0;margin: 0;}
.notice .border{min-height:350px;}
.notice ul{padding: 0;list-style: none;}
.notice ul li{margin-bottom: 15px;position: relative;}
.notice ul li span{background: #000;color: #fff;padding: 3px;position: absolute;right: 0;bottom: 0;font-size: 11px;}

.testimonial{}
.testimonial .content{margin: 15px 0px;}
.testimonial .content p{background: #fff;padding: 15px;font-size: 14px;}
.testimonial .content:after{content:'\f10d';display: block;position: absolute;left: 20px;top: -10px;font-size: 30px;font-family: 'FontAwesome';color: #eb2125;}
.testimonial img{width: 50px!important;height: 50px!important;border-radius: 50%;float: left;margin-right: 30px;}
.testimonial h4{margin: 0}
.testimonial h5{font-weight: 500;font-size: 14px;}

.footer-top{background: #232323!important;}
.footer-top ul li{color:#eb2125!important;margin-bottom: 5px;}
.footer-top ul li a{color:#fff!important}
.footer-top h6{color: #fff}

.social{margin-top: 40px}
.social a{margin-right: 15px}
.social img{height: 35px}

footer{background: #eb2125;text-align: center;}
footer p{color: #fff; margin:0!important}

@media(max-width: 1200px){
	nav ul{display: none;}
	nav ul.main{position: fixed;right:0;top:0;background: #fff;height: 100vh;width: 280px;z-index: 9;overflow-x: scroll;border-left: 1px solid #d5d5d5;}
	nav ul.main *{color:#000;text-align:left;}
	nav ul.main a{padding: 8px 5px;}
	nav ul ul, nav ul ul ul, nav .zero:hover ul, nav .one li:hover ul{display:block;background: whitesmoke;position: initial;width: 100%;padding-left: 20px;}
}

@media(max-width:767px){
	.topbar a{font-size: 12px;margin: 2px 0px;}
}

@media(max-width:575px){
	header h1{font-size: 28px;}
	header .middle img{height: 50px;margin: 0 0px;}
}

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

.card-img-top {
            padding: 20px;
      
            height: 200px;
            object-fit: cover;
        }

    

    </style>
    
</head>
<body>

<div class="topbar pt-2 pb-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-md-left text-center mb-md-0 mb-3">
                <div class="top-social">
                    <a href="#"><img src="images/facebook.png"></a>
                    <a href="#"><img src="images/instagram.png"></a>
                    <a href="#"><img src="images/linkedin.png"></a>
                    <a href="#"><img src="images/youtube.png"></a>
                    <a href="#"><img src="images/blogger.png"></a>
                </div>
            </div>
            <div class="col-md-8 text-md-right text-center right">
                <a href="https://spm.du.ac.in/index.php?option=com_users&amp;view=login&amp;Itemid=203&amp;lang=en">Faculty Login</a>
                <a href="https://spm.du.ac.in/index.php?option=com_users&amp;view=login&amp;Itemid=203&amp;lang=en">Student Login</a>
                <a href="https://www.iobnet.co.in/iobpay/entry.do?dirlinkcatcd=EDU&amp;dirlinkmerid=SPMDEL">Fee Payment</a>
                <a href="https://spm.du.ac.in/index.php?option=com_content&amp;view=article&amp;id=67&amp;Itemid=215&amp;lang=en">RTI</a>
                <a href="https://spm.du.ac.in/index.php?option=com_content&amp;view=article&amp;id=18:important-links&amp;catid=2:english&amp;lang=en&amp;Itemid=133">Important Links</a>
                <a href="https://bharatfakenewskosh.com/College%20Website/#">Admin</a>
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
                        <li><a href="Departments.html">Departments</a></li>
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
<div class="container" style="padding-top: 30px;">
    <div class="row gy-3">
    <?php foreach ($departments as $department): ?>
            <div class='col-md-4' style="padding-top: 30px;">
                <div class="card h-100">
                <img src="<?php echo $department['department_image']; ?>" class="card-img-top" alt="Department Image">
                    <div class="card-body">
                      <h5 class='card-title'> Department of <?php echo $department['department']; ?></h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                       <p class="card-text">Total Faculty: <?php echo $department['total_faculty']; ?></p>
                       
                            <button onclick="window.location.href='newcards2.php?department=<?php echo urlencode($department['department']); ?>'"
                                class="button-27" role="button">View Faculty
                        </button></img>
                    </div>
                    <?php if (count($departments) % 3 == 0): ?>
                        <br>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
                    </div>
    </div>
</div>
<br><br><br>




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
            <div class="col-12 pt-4">
                <div class="website-counter"></div>
            </div>
        </div>
    </div>
</div>

<footer class="pt-2 pb-2">
    <p>Copyright 2023. All Rights Reserved</p>
    <p>Visitor Count:</p>
       <a href='https://www.free-counters.org/'>free Counters</a>
        <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=fe73cc894619fa3ee822f78aa697e63ef2994dfe'></script>
        <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1112424/t/5"></script>
</footer>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
