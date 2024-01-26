<?php
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="style.css">

        <!----===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <title>Admin Dashboard Panel</title>
    </head>

    <body>
        <nav>
            <div class="logo-name">
                <div class="logo-image">
                    <img src="admin.jpeg" alt="">
                </div>

                <span class="logo_name">Admin</span>
            </div>
            </div>

            <div class="menu-items">
                <ul class="nav-links">
                    <li><a href="">
                            <i class="uil uil-estate"></i>
                            <span class="link-name">Home</span>
                        </a></li>
                    <li><a href="tbfac2.php">
                            <i class="uil uil-files-landscapes"></i>

                            <span class="link-name">view faculty </span>
                        </a></li>
                    <li><a href="tbdep.php">
                            <i class="uil uil-chart"></i>

                            <span class="link-name">view departments</span>
                        </a></li>

                </ul>

                <ul class="logout-mode">
                    <li><a href="?logout">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                        </a></li>


                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                    </li>
                </ul>
            </div>
        </nav>

        <section class="dashboard">
            <div class="top">
                <i class="uil uil-bars sidebar-toggle"></i>

                <!--<img src="images/profile.jpg" alt="">-->
            </div>

            <!DOCTYPE html>
            <html>

                <head>
                    <title>Responsive Table</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                </head>

                <body>
                    <section class="dashboard">
                        <div class="top">
                            <i class="uil uil-bars sidebar-toggle"></i>
                        </div>

                        <section class="dashboard">
                            <div class="top">
                                <i class="uil uil-bars sidebar-toggle"></i>
                                <span class="text">Dashboard</span>
                                <!--<img src="images/profile.jpg" alt="">-->
                            </div>

                            <div class="dash-content">
                                <div class="overview">
                                    <div class="title">
                                        <div class="boxes">
                                            <div class="box box1" style="margin-right:120px">
                                                <a href="tbdep.php"><i class="uil uil-chart "></i>
                                                    <span class="text">Department wise info</span>
                                                </a>
                                            </div>
                                            <div class="box box1" style="margin-right:120px">
                                                <a href="edit_home_page.php">
                                                    <i class="uil uil-files-landscapes"></i>
                                                    <span class="text">Edit home page</span>

                                                </a>

                                            </div>
                                            <div class="box box1" style="margin-right:120px">
                                                <a href="add_testimonial.php">
                                                    <i class="uil uil-files-landscapes"></i>
                                                    <span class="text">Edit Testimonial</span>

                                                </a>

                                            </div>
                                            <div class="box box1" style="margin-right:120px">
                                                <a href="image_carousel.php">
                                                    <i class="uil uil-files-landscapes"></i>
                                                    <span class="text">Add image to carousel</span>

                                                </a>

                                            </div>
                                            <div class="box box1" style="margin-right:120px">
                                                <a href="home_image_slider.php">
                                                    <i class="uil uil-files-landscapes"></i>
                                                    <span class="text">Add image to<br> home slider</span>

                                                </a>

                                            </div>
                                        </div>


                                    </div>


                                </div>


                                <script src="script.js"></script>
                </body>

            </html>
    </body>

</html>



<style>
    /* ===== Google Font Import - Poppins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    :root {
        /* ===== Colors ===== */
        --primary-color: #0E4BF1;
        --panel-color: #FFF;
        --text-color: #000;
        --black-light-color: #707070;
        --border-color: #e6e5e5;
        --toggle-color: #DDD;
        --box1-color: #4DA3FF;
        --box2-color: #4DA3FF;
        --box3-color: #4DA3FF;
        --title-icon-color: #fff;

        /* ====== Transition ====== */
        --tran-05: all 0.5s ease;
        --tran-03: all 0.3s ease;
        --tran-03: all 0.2s ease;
    }

    .logo-image {
        border-radius: 0 10% 10% 10%;

    }


    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        background-color: var(--primary-color);
    }

    body.dark {
        --primary-color: #3A3B3C;
        --panel-color: #242526;
        --text-color: #CCC;
        --black-light-color: #CCC;
        --border-color: #4D4C4C;
        --toggle-color: #FFF;
        --box1-color: #3A3B3C;
        --box2-color: #3A3B3C;
        --box3-color: #3A3B3C;
        --title-icon-color: #CCC;
    }


    nav {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 250px;
        padding: 10px 14px;
        background-color: var(--panel-color);
        border-right: 1px solid var(--border-color);
        transition: var(--tran-05);
    }

    nav.close {
        width: 73px;
    }

    nav .logo-name {
        display: flex;
        align-items: center;
    }

    nav .logo-image {
        display: flex;
        justify-content: center;
        min-width: 45px;
    }

    nav .logo-image img {
        width: 40px;
        object-fit: cover;
        border-radius: 50%;
    }

    nav .logo-name .logo_name {
        font-size: 22px;
        font-weight: 600;
        color: var(--text-color);
        margin-left: 14px;
        transition: var(--tran-05);
    }

    nav.close .logo_name {
        opacity: 0;
        pointer-events: none;
    }

    nav .menu-items {
        margin-top: 40px;
        height: calc(100% - 90px);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .menu-items li {
        list-style: none;
    }

    .menu-items li a {
        display: flex;
        align-items: center;
        height: 50px;
        text-decoration: none;
        position: relative;
    }

    .nav-links li a:hover:before {
        content: "";
        position: absolute;
        left: -7px;
        height: 5px;
        width: 5px;
        border-radius: 50%;
        background-color: var(--primary-color);
    }

    body.dark li a:hover:before {
        background-color: var(--text-color);
    }

    .menu-items li a i {
        font-size: 24px;
        min-width: 45px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--black-light-color);
    }

    .menu-items li a .link-name {
        font-size: 18px;
        font-weight: 400;
        color: var(--black-light-color);
        transition: var(--tran-05);
    }

    nav.close li a .link-name {
        opacity: 0;
        pointer-events: none;
    }

    .nav-links li a:hover i,
    .nav-links li a:hover .link-name {
        color: var(--primary-color);
    }

    body.dark .nav-links li a:hover i,
    body.dark .nav-links li a:hover .link-name {
        color: var(--text-color);
    }

    .menu-items .logout-mode {
        padding-top: 10px;
        border-top: 1px solid var(--border-color);
    }

    .menu-items .mode {
        display: flex;
        align-items: center;
        white-space: nowrap;
    }

    .menu-items .mode-toggle {
        position: absolute;
        right: 14px;
        height: 50px;
        min-width: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .mode-toggle .switch {
        position: relative;
        display: inline-block;
        height: 22px;
        width: 40px;
        border-radius: 25px;
        background-color: var(--toggle-color);
    }

    .switch:before {
        content: "";
        position: absolute;
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
        height: 15px;
        width: 15px;
        background-color: var(--panel-color);
        border-radius: 50%;
        transition: var(--tran-03);
    }

    body.dark .switch:before {
        left: 20px;
    }

    .dashboard {
        position: relative;
        left: 250px;
        background-color: var(--panel-color);
        min-height: 100vh;
        width: calc(100% - 250px);
        padding: 10px 14px;
        transition: var(--tran-05);
        margin-right: 300px;
    }

    nav.close~.dashboard {
        left: 73px;
        width: calc(100% - 73px);
    }

    .dashboard .top {
        position: fixed;
        top: 0;
        left: 250px;
        display: flex;
        width: calc(100% - 250px);
        justify-content: flex-start;
        align-items: center;
        padding: 10px 14px;
        background-color: var(--panel-color);
        transition: var(--tran-05);
        z-index: 10;
    }

    nav.close~.dashboard .top {
        left: 73px;
        width: calc(100% - 73px);
    }

    .dashboard .top .sidebar-toggle {
        font-size: 26px;
        color: var(--text-color);
        cursor: pointer;
    }

    .dashboard .top .search-box {
        position: relative;
        height: 45px;
        max-width: 600px;
        width: 100%;
        margin: 0 30px;
    }

    .top .search-box input {
        position: absolute;
        border: 1px solid var(--border-color);
        background-color: var(--panel-color);
        padding: 0 25px 0 50px;
        border-radius: 5px;
        height: 100%;
        width: 100%;
        color: var(--text-color);
        font-size: 15px;
        font-weight: 400;
        outline: none;
    }

    .top .search-box i {
        position: absolute;
        left: 15px;
        font-size: 22px;
        z-index: 10;
        top: 50%;
        transform: translateY(-50%);
        color: var(--black-light-color);
    }

    .top img {
        width: 40px;
        border-radius: 50%;
    }

    .dashboard .dash-content {
        padding-top: 0px;
        display: flex;
        flex-direction: column;
    }

    .dash-content .title {
        display: flex;
        align-items: center;
        margin: 60px 0 30px 0;
    }

    .dash-content .title i {
        position: relative;
        right: 5%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .dash-content .title {
        position: relative;
        right: 50%;
        bottom: 70%;
        font-size: 24px;
    }

    .dash-content .title .text,
    a {
        font-size: 24px;
        font-weight: 500;
        color: var(--text-color);
        text-decoration: none;

    }

    .dash-content .boxes {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-right: 100px;
        height: 400px;


    }

    .dash-content .boxes .box {
        left: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 12px;
        width: calc(100% / 3 - 7px);
        padding: 20px 25px;
        background-color: var(--box1-color);
        transition: var(--tran-05);
    }

    .boxes .box i {
        font-size: 35px;
        color: var(--text-color);
    }

    .boxes .box .text {
        white-space: nowrap;
        font-size: 20px;
        font-weight: 500;
        color: var(--text-color);
    }

    .boxes .box .number {
        font-size: 40px;
        font-weight: 500;
        color: var(--text-color);
    }

    .boxes .box.box2 {
        background-color: var(--box2-color);
    }

    .boxes .box.box3 {
        background-color: var(--box3-color);
    }

    .dash-content .activity .activity-data {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .activity .activity-data {
        display: flex;
    }

    .activity-data .data {
        display: flex;
        flex-direction: column;
        margin: 0 15px;
    }

    .activity-data .data-title {
        font-size: 20px;
        font-weight: 500;
        color: var(--text-color);
    }

    .activity-data .data .data-list {
        font-size: 18px;
        font-weight: 400;
        margin-top: 20px;
        white-space: nowrap;
        color: var(--text-color);
    }

    .edit {
        font-size: 20px;
        display: flex;
        flex-direction: column;
        white-space: nowrap;
        font-weight: 500;
        align-items: center;
        border-radius: 12px;
        width: 150%;
        padding: 35px 5px;
        flex-wrap: wrap;
        background-color: var(--box1-color);
        transition: var(--tran-05);
        cursor: pointer;

        justify-content: space-between;
        margin-right: 40px;
        /*display: flex;
    align-items: center;
    background-color: #3498db; 
    color: var(--text-color);
    padding: 15px 20px;
    flex-direction: column;
    margin:
    font-size: 35px;
    font-weight: 500px;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    transition: background-color 0.3s ease;*/
    }

    .edit a {
        text-decoration: none;
    }

    .edit:hover {
        background-color: #2980b9;
        /* Darker blue on hover */
    }
</style>

<script>
    const body = document.querySelector("body"),
        modeToggle = body.querySelector(".mode-toggle");
    sidebar = body.querySelector("nav");
    sidebarToggle = body.querySelector(".sidebar-toggle");

    let getMode = localStorage.getItem("mode");
    if (getMode && getMode === "dark") {
        body.classList.toggle("dark");
    }

    let getStatus = localStorage.getItem("status");
    if (getStatus && getStatus === "close") {
        sidebar.classList.toggle("close");
    }

    modeToggle.addEventListener("click", () => {
        body.classList.toggle("dark");
        if (body.classList.contains("dark")) {
            localStorage.setItem("mode", "dark");
        } else {
            localStorage.setItem("mode", "light");
        }
    });

    sidebarToggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        if (sidebar.classList.contains("close")) {
            localStorage.setItem("status", "close");
        } else {
            localStorage.setItem("status", "open");
        }
    })

</script>