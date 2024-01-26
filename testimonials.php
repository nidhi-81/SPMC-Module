<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="images/fav.png">
        <title>Testimonials</title>
        <link rel="stylesheet" type="text/css" href="css/aos.css">
        <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet" >
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


        <style>
            body {}


            @media (max-width:991.98px) {
                .padding {
                    padding: 1.5rem
                }
            }

            @media (max-width:767.98px) {
                .padding {
                    padding: 1rem
                }
            }

            .padding {
                padding: 500rem
            }

            .card {
                position: center;
                margin-top: 100px;
                margin-left: 25%;
                display: flex;
                width: 700px;
                flex-direction: row;
                min-width: 0;
                word-wrap: break-word;
                background-color: #ffffff;
                background-clip: border-box;
                border: 1px solid #d2d2dc;
                border-radius: 11px;
                -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
                -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
                box-shadow: 0px 0px 5px 0px rgb(161, 163, 164);
            }

            .card .card-body {
                padding: 1rem 1rem;
            }

            .card-body {
                flex: 1 1 auto;
                padding: 125rem
            }

            p {
                font-size: 0.875rem;
                margin-bottom: .5rem;
                line-height: 1.5rem
            }

            h4 {
                line-height: .2 !important;
            }

            .profile {
                margin-top: 16px;
                margin-left: 11px;
            }

            .profile-pic {
                width: 58px;
            }

            .cust-name {
                font-size: 18px;
            }

            .cust-profession {
                font-size: 10px;
            }



            .items {
                width: 90%;
                margin: 0px auto;
                margin-top: 100px
            }

            .slick-slide {
                margin: 10px
            }
        </style>

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
                                    <li><a href="#">Vision and Mission</a></li>
                                    <li><a href="#">Governing Body</a></li>
                                    <li><a href="#">Chairman's Message</a></li>
                                    <li><a href="#">Principal's Message</a></li>
                                    <li><a href="#">Staff</a> </li>
                                    <li><a href="#">List of Committees</a></li>
                                    <li><a href="#">BOS-AC</a></li>
                                    <li><a href="#">Code of Professional Ethics</a></li>
                                    <li><a href="#">Infrastructure and Facilities</a></li>
                                    <li><a href="#">SWOC</a></li>
                                    <li><a href="#">Annual Report</a></li>
                                </ul>
                            </li>

                            <li class="zero"><a href="#home">Administration</a>
                                <ul class="one">
                                    <li><a href="#">Organizational Structure</a></li>
                                    <li><a href="#">Principal</a></li>
                                    <li><a href="#">Vice Principal</a></li>
                                    <li><a href="#">Librarian</a></li>
                                    <li><a href="#">Administrative Officer (AO)</a></li>
                                    <li><a href="#">Liason Officer</a></li>
                                    <li><a href="#">Mandatory Disclosure</a></li>
                                    <li><a href="#">Roster</a></li>
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
                                    <li><a href="#">Overview</a></li>
                                    <li><a href="#">AQAR</a></li>
                                    <li><a href="#">Policies</a></li>
                                    <li><a href="#">Institutional Best Practices</a></li>
                                    <li><a href="#">Institutional Distinctiveness</a></li>
                                    <li><a href="#">Meeting Minutes</a></li>
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
                                    <li><a href="#">Departments</a></li>
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">Academic Calender</a></li>
                                    <li><a href="#">Syllabus</a></li>
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
                                    <li><a href="#">Online Help-desk</a></li>
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
                                    <li><a href="#">Subjects Allotment</a></li>
                                    <li><a href="#">Attendance</a></li>
                                    <li><a href="#">Internal Assessment</a></li>
                                    <li><a href="#">Results</a></li>
                                    <li><a href="#">Awards/Scholarships</a></li>
                                    <li><a href="#">Grievance Cell</a></li>
                                    <li><a href="#">Foreign Students' Registry</a></li>
                                    <li><a href="#">Safety and Security</a></li>
                                    <li><a href="#">Capability Enhancement Program</a></li>
                                    <li><a href="#">Student Mentorship</a></li>
                                </ul>
                            </li>

                            <li class="zero"><a href="#nirf">Placement Cell</a>
                                <ul class="one">
                                    <li><a href="#">About Placement Cell</a></li>
                                    <li><a href="#">Registration</a></li>
                                    <li><a href="#">Internship and Workshops</a></li>
                                    <li><a href="#">Contact Placement Cell</a></li>
                                </ul>
                            </li>

                            <li class="zero"><a href="#nirf">Research &amp; Innovation</a>
                                <ul class="one">
                                    <li><a href="#">JARHLSS College Journal</a></li>
                                    <li><a href="#">Research Publications</a></li>
                                    <li><a href="#">Research Projects</a></li>
                                    <li><a href="#">Patents</a></li>
                                    <li><a href="#">Awards and Accolades</a></li>
                                    <li><a href="#">Memorandum of Understandings (MoUs)</a></li>
                                    <li><a href="#">National/International Conferences</a></li>
                                    <li><a href="#">Faculty Development Programs (FDPs)</a></li>
                                    <li><a href="#">Internships and Workshops</a></li>
                                </ul>
                            </li>

                            <li class="zero"><a href="#nirf">Co-Curricular</a>
                                <ul class="one">
                                    <li><a href="#">NSS (National Service Scheme)</a></li>
                                    <li><a href="#">NCC (National Cadet Corps)</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Student Council</a></li>
                                    <li><a href="#">DUSU Elections</a></li>
                                    <li><a href="#">College Magazine</a></li>
                                    <li><a href="#">Departmental e-Newsletter and Blog</a></li>
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
                                    <li><a href="#">Library</a></li>
                                    <li><a href="#">IT Infrastructure</a></li>
                                    <li><a href="#">Medical Facility</a></li>
                                    <li><a href="#">Canteen</a></li>
                                    <li><a href="#">Bank</a></li>
                                    <li><a href="#">Residential Facility for Staff</a></li>
                                    <li><a href="#">English Language Support Center</a></li>
                                    <li><a href="#">Physical Facilities</a></li>
                                </ul>
                            </li>

                            <li><a href="#contact">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>




        <!--testimonial-->

        <?php

        $sql = "SELECT * FROM testimonial";
        $result = mysqli_query($conn, $sql);


        if ($result === false) {
            // Handle the SQL error
            echo "Error: " . mysqli_error($conn);
        } else {

            ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
                        <div class="template-demo">
                            <p><?php echo $row['description'] ?></p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="profile-pic" src="<?php echo $row['image'] ?>">
                            </div>
                            <div class="col-sm-10">
                                <div class="profile">
                                    <h4 class="cust-name"><?php echo $row['name'] ?></h4>
                                    <p class="cust-profession"><?php echo $row['role'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        } ?>


        </div>
        <div class="col-md-6 col-lg-4 pb-3">

            <!-- Add other cards for tesimonials here instead -->

        </div>
        <div class="col-md-6 col-lg-4 pb-3">


        </div>
        </div>

        </div>
        </div>
        </div>

    </body>

</html>







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
    <script type='text/javascript'
        src='https://www.freevisitorcounters.com/auth.php?id=fe73cc894619fa3ee822f78aa697e63ef2994dfe'></script>
    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1112424/t/5"></script>
</footer>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src=".js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
</body>

</html>