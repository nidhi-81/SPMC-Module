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

<body>


     <!-- php -->

     <?php
     session_start();
     include 'database.php';
     include 'fetch_data.php';



     ?>


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



    <!---->
    <?php
        $sql = "SELECT * FROM home_image_slider";
        $result = mysqli_query($conn, $sql);


        if ($result === false) {
            // Handle the SQL error
            echo "Error: " . mysqli_error($conn);
        } else {

            ?>



    <div class="banner">
        <div class="owl-carousel owl-theme">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>

            <img src="<?php echo $row['image'] ?>">
        <?php endwhile;
        } ?>
           
        </div>
    </div>

    <div class="box pt-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col mb-5">
                    <div class="border p-4">
                        <img src="images/school.png" height="50" class="mb-4">
                        <h4>4000+ <br> Students</h4></div>
                </div>
                <div class="col mb-5">
                    <div class="border p-4">
                        <img src="images/graduation.png" height="50" class="mb-4">
                        <h4>190+ <br> Faculty</h4></div>
                </div>
                <div class="col mb-5">
                    <div class="border p-4">
                        <img src="images/networking.png" height="50" class="mb-4">
                        <h4>19 <br> Departments</h4></div>
                </div>
                <div class="col mb-5">
                    <div class="border p-4">
                        <img src="images/webinar.png" height="50" class="mb-4">
                        <h4>50+ <br> Courses</h4></div>
                </div>
                <div class="col mb-5">
                    <div class="border p-4">
                        <img src="images/overpopulation.png" height="50" class="mb-4">
                        <h4>11 <br> Societies/Cell</h4></div>
                </div>
            </div>
        </div>
    </div>

    <div class="intro bg-light pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <img src="images/principal.png" width="100%" class="border p-2 bg-white">
                </div>
                <div class="col-md-8 mb-5">
                    <h2>Principal's Message</h2>
                    <p>"We can not always build the future for our youth, but we can build our youth for future". At SPM we foster a positive spirit and believe in creating and maintaining a fruitful collaboration between students, parents, teachers and support staff, striving to create a space that sustains excellence. With a long and rewarding history of achievement in academics, and in co-curricular activities like sports, dance, theatre, music, NCC, NSS and many more, our college continues to move forward with confidence, pride and enthusiasm.</p>
                    <p>Remember, "the reward of every good action will be good only". As the very proud principal of Shyama Prasad Mukherji College, which has a glorious history of providing education and opportunities to gifted and talented young women since 1969, I welcome you to the official website of our institution.</p>
                    <h4>Prof. (Dr.) Sadhna Sharma</h4>
                    <p><strong>(Principal, Shyama Prasad Mukherji College)</strong></p>
                </div>
            </div>
        </div>
    </div>

    <?php

    $sql = "SELECT * FROM edit_homepage where category = 'Notices' ";
    $result = mysqli_query($conn, $sql);


    if ($result === false) {
        // Handle the SQL error
        echo "Error: " . mysqli_error($conn);
    } else {

        ?>



    <div class="notice pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-5">
                    <h2>Notices</h2>
                    <div class="border p-4">
                        <marquee direction="up">
                            <ul>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <li><span><?php echo $row['date']; ?> </span>
                                    <a href="<?php echo $row['file']; ?>" target='_blank'>
                                        <?php echo $row['description']; ?>
                                    </a>
                                </li>

                            <?php endwhile;
                       } ?>
                            </ul>
                        </marquee>
                    </div>
                    <div class="display:block text-center mt-4">
                        <a href="NOTICES.php" class="btn btn-primary">View all Notices</a>
                    </div>
                </div>


                <!-- php -->
                <?php

                $sql = "SELECT * FROM edit_homepage WHERE category='Events'";
                $result = mysqli_query($conn, $sql);


                if ($result === false) {
                    // Handle the SQL error
                    echo "Error: " . mysqli_error($conn);
                } else {

                    ?>

                <div class="col-md-4 col-sm-6 mb-5">
                    <h2>Events</h2>
                    <div class="border p-4">
                        <ul>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>

                            <li>

                                <a href="<?php echo $row['file'] ? $row['file'] : '#'; ?>" target='_blank'>
                                    <span><?php echo $row['date']; ?> </span><?php echo $row['description']; ?>
                                </a>
                            </li>

                        <?php endwhile;
        } ?>

                        </ul>
                    </div>
                    <div class="display:block text-center mt-4">
                        <a href="EVENTS.php" class="btn btn-primary">View all Events</a>
                    </div>
                </div>

                 <!-- php -->
                 <?php

                 $sql = "SELECT * FROM edit_homepage where category = 'Achievements' ";
                 $result = mysqli_query($conn, $sql);



                 if ($result === false) {
                     // Handle the SQL error
                     echo "Error: " . mysqli_error($conn);
                 } else {

                     ?>


                <div class="col-md-4 mb-5">
                    <h2>Achievement</h2>
                    <div class="border p-4">
                        <ul>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <li>
                                <a href="<?php echo $row['file'] ? $row['file'] : '#'; ?>" target='_blank'>

                                    <span><?php echo $row['date']; ?> </span><?php echo $row['description']; ?>
                                </a>
                            </li>
                        <?php endwhile;
        } ?>

                        </ul>
                    </div>
                    <div class="display:block text-center mt-4">
                        <a href="achievements.php" class="btn btn-primary">View all Achievement</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $sql = "SELECT * FROM testimonial ";
    $result = mysqli_query($conn, $sql);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        ?>



    <div class="testimonial pt-5 pb-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Testimonials</h2>
                    <p class="mb-5">Few of Our Achiever’s and Their Feedbacks</p>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                       
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <div class="content">
                            <p><?php echo $row['description'] ?></p>
                            <img src="<?php echo $row['image'] ?>">
                            <h4><?php echo $row['name'] ?></h4>
                            <h5><?php echo $row['role'] ?></h5>
                        </div>
                    <?php endwhile;
            } ?>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="display:block text-center mt-4">
        <a href="testimonials.php" class="btn btn-primary">View all Testimonials</a>
    </div>
    
    
    <div class="gallery pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        $sql = "SELECT * FROM image_carousel ";
                        $result = mysqli_query($conn, $sql);
                        if ($result === false) {
                            echo "Error: " . mysqli_error($conn);
                        } else {
                            ?>
                            <div class="owl-carousel owl-theme">
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <img src="<?php echo $row['path'] ?>" class="border p-2 bg-white">
                                <?php endwhile;
                        } ?>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>  

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

    <footer class="pt-2 pb-2">
        <p>Copyright 2023. All Rights Reserved</p>
    </footer>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/script.js"></script>
    
</body>
</html>