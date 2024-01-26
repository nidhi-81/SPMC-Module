<!DOCTYPE html>
<html lang="en">

    <head>

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="image/x-icon" href="images/fav.png">
            <title>Events</title>
            <link rel="stylesheet" type="text/css" href="css/aos.css">
            <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
            <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
            <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="style.css">

        </head>

    <body>
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
                        <a
                            href="https://spm.du.ac.in/index.php?option=com_users&amp;view=login&amp;Itemid=203&amp;lang=en">Faculty
                            Login</a>
                        <a
                            href="https://spm.du.ac.in/index.php?option=com_users&amp;view=login&amp;Itemid=203&amp;lang=en">Student
                            Login</a>
                        <a href="https://www.iobnet.co.in/iobpay/entry.do?dirlinkcatcd=EDU&amp;dirlinkmerid=SPMDEL">Fee
                            Payment</a>
                        <a
                            href="https://spm.du.ac.in/index.php?option=com_content&amp;view=article&amp;id=67&amp;Itemid=215&amp;lang=en">RTI</a>
                        <a
                            href="https://spm.du.ac.in/index.php?option=com_content&amp;view=article&amp;id=18:important-links&amp;catid=2:english&amp;lang=en&amp;Itemid=133">Important
                            Links</a>
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
                                    <li><a href="Institutional Distinctiveness.html">Institutional
                                            Distinctiveness</a></li>
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
                                    <li> <a href="attendance.html">Attendance</a></li>
                                    <li> <a href="internal asesment.html">Internal Assessment</a></li>
                                    <li> <a href="results.html">Results</a></li>
                                    <li> <a href="awards.html">Awards/Scholarships</a></li>
                                    <li> <a href="grivence cell.html">Grievance Cell</a></li>
                                    <li> <a href="foriegn students registry.html">Foreign Students' Registry</a>
                                    </li>
                                    <li> <a href="Safety and security.html">Safety and Security</a></li>
                                    <li><a href="capability enhancement program.html">Capability Enhancement
                                            Program</a></li>
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
                                    <li> <a href="Research_publications.html">Research Publications</a></li>
                                    <li> <a href="Research_projects.html">Research Projects</a></li>
                                    <li> <a href="#">Patents</a></li>
                                    <li> <a href="#">Awards and Accolades</a></li>
                                    <li> <a href="#">Memorandum of Understandings (MoUs)</a></li>
                                    <li> <a href="#">National/International Conferences</a></li>
                                    <li> <a href="FDPs.html">Faculty Development Programs (FDPs)</a></li>
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
                                    <li> <a href="bank.html">Bank</a></li>
                                    <li> <a href="Residentialfacilitystaff.html">Residential Facility for Staff</a>
                                    </li>
                                    <li> <a href="Englishlanguagesupportcentre.html">English Language Support
                                            Center</a></li>
                                    <li><a href="Physical Facility.html">Physical Facilities</a></li>
                                    <li><a href="#">IT Infrastructure</a></li>
                                    <li class="zero"><a href="#library">Library</a>
                                        <ul class="one">
                                            <li><a href="About_Library.html">About</a></li>
                                            <li> <a href="Annual_Lib_Report.html">Annual Repoprt</a></li>
                                            <li> <a href="Lib_Mem_Registration.html">Member Registration</a></li>
                                            <li> <a href="Lib_Membership_Notice">Membership Notice</a></li>
                                            <li> <a href="Library_Activity.html">Activity</a></li>
                                            <li> <a href="Library_Committee.html">Committee</a></li>
                                            <li> <a href="Linrary_Rules.html">Rules</a></li>
                                            <li> <a href="N-LIST.html">N-LIST</a></li>
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
        <div class="container-bdj">
            <div class="container-jby">
                <div class="row-kr3">
                    <div class="col-5gl">
                        <div class="whi-wli">
                            <div>
                            </div>
                            <div>
                                <meta>
                                <div class="header-yi9">
                                    <h2>
                                        Events
                                    </h2>
                                </div>
                                <?php

                                $sql = "SELECT * FROM edit_homepage where category = 'Events' ";
                                $result = mysqli_query($conn, $sql);


                                if ($result === false) {
                                    // Handle the SQL error
                                    echo "Error: " . mysqli_error($conn);
                                } else {

                                    ?>
                                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                            <div class="notice">
                                            <a href="<?php echo $row['file'] ?>"><?php echo $row['description'] ?></a>
                                        </div>
                                    <?php endwhile;
                                } ?>

                            </div>
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
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224035.9081748121!2d76.82267139453123!3d28.672858600000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03bdaa2376f3%3A0xa147304d775dd37d!2sSPM%20College!5e0!3m2!1sen!2sin!4v1701776104674!5m2!1sen!2sin"
                                width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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

<!--vision css, inserted page css-->
<style>
    body {
        background: #f6f6f6;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-size: 15px;
        line-height: 27px;
        color: #444;
    }

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        background: #f6f6f6;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-size: 15px;
        line-height: 27px;
        color: #444;
        overflow-x: hidden;
    }

    body {
        margin: 0;
    }

    html {
        font-family: sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    html {
        font-size: 10px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .container-bdj {
        margin-bottom: 30px;
    }

    :before,
    :after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .container-jby {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .notice {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #f9f9f9;
    }

    .notice h3 {
        color: #333;
    }

    .notice p {
        color: #555;
    }

    @media (min-width: 768px) {
        .container-jby {
            width: 750px;
        }
    }

    @media (min-width: 992px) {
        .container-jby {
            width: 970px;
        }
    }

    @media (min-width: 1200px) {
        .container-jby {
            width: 1170px;
        }
    }

    .cle-qql:before,
    .cle-qql:after,
    .dl-horizontal dd::before,
    .dl-horizontal dd::after,
    .container-jby:before,
    .container-jby:after,
    .container-fluid:before,
    .container-fluid:after,
    .row-kr3:before,
    .row-kr3:after,
    .form-horizontal .form-group::before,
    .form-horizontal .form-group::after,
    .btn-toolbar:before,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group::before,
    .btn-group-vertical>.btn-group::after,
    .nav:before,
    .nav:after,
    .navbar:before,
    .navbar:after,
    .navbar-header:before,
    .navbar-header:after,
    .navbar-collapse:before,
    .navbar-collapse:after,
    .pager:before,
    .pager:after,
    .panel-body:before,
    .panel-body:after,
    .modal-header:before,
    .modal-header:after,
    .modal-footer:before,
    .modal-footer:after {
        display: table;
        content: " ";
    }

    .cle-qql::before,
    .cle-qql::after,
    .dl-horizontal dd::before,
    .dl-horizontal dd::after,
    .container-jby::before,
    .container-jby::after,
    .container-fluid::before,
    .container-fluid::after,
    .row-kr3::before,
    .row-kr3::after,
    .form-horizontal .form-group::before,
    .form-horizontal .form-group::after,
    .btn-toolbar::before,
    .btn-toolbar::after,
    .btn-group-vertical>.btn-group::before,
    .btn-group-vertical>.btn-group::after,
    .nav::before,
    .nav::after,
    .navbar::before,
    .navbar::after,
    .navbar-header::before,
    .navbar-header::after,
    .navbar-collapse::before,
    .navbar-collapse::after,
    .pager::before,
    .pager::after,
    .panel-body::before,
    .panel-body::after,
    .modal-header::before,
    .modal-header::after,
    .modal-footer::before,
    .modal-footer::after {
        display: table;
        content: " ";
    }

    .cle-qql:after,
    .dl-horizontal dd::after,
    .container-jby:after,
    .container-fluid:after,
    .row-kr3:after,
    .form-horizontal .form-group::after,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group::after,
    .nav:after,
    .navbar:after,
    .navbar-header:after,
    .navbar-collapse:after,
    .pager:after,
    .panel-body:after,
    .modal-header:after,
    .modal-footer:after {
        clear: both;
    }

    .row-kr3 {
        margin-right: -15px;
        margin-left: -15px;
    }

    .cle-qql::after,
    .dl-horizontal dd::after,
    .container-jby::after,
    .container-fluid::after,
    .row-kr3::after,
    .form-horizontal .form-group::after,
    .btn-toolbar::after,
    .btn-group-vertical>.btn-group::after,
    .nav::after,
    .navbar::after,
    .navbar-header::after,
    .navbar-collapse::after,
    .pager::after,
    .panel-body::after,
    .modal-header::after,
    .modal-footer::after {
        clear: both;
    }

    .col-5gl {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width: 992px) {
        .col-5gl {
            float: left;
        }

        .col-5gl {
            width: 100%;
        }
    }

    .whi-wli {
        background: #fff;
        padding: 15px;
        border: 1px solid #dedede;
    }

    .header-yi9 {
        padding-bottom: 9px;
        margin: 40px 0 20px;
        border-bottom: 1px solid #eee;
    }

    h2 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit;
    }

    h2 {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    h2 {
        font-size: 26px;
    }

    p {
        margin: 0 0 15px;
    }

    ul {
        margin-top: 0;
        margin-bottom: 10px;
    }

    strong {
        font-weight: bold;
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #style-zQwVa.style-zQwVa {
        font-size: 14pt;
    }

    #style-VDeW2.style-VDeW2 {
        text-align: justify;
    }

    #style-dLR4z.style-dLR4z {
        text-align: justify;
    }

    #style-SsHXO.style-SsHXO {
        text-align: justify;
    }

    #style-4fEw6.style-4fEw6 {
        font-size: 14pt;
    }

    #style-37p9F.style-37p9F {
        text-align: justify;
    }

    #style-fyZMi.style-fyZMi {
        text-align: justify;
    }

    #style-5d7Kj.style-5d7Kj {
        text-align: justify;
    }
</style>