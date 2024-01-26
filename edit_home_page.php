<!DOCTYPE html>
<html>

    <head>
        <title>Edit User Form</title>
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




            select {
                width: 1000px;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 15px;
                border: 1px solid #cccccc;
                border-radius: 4px;
            }

            input[type="text"],input[type="date"] {
                width: 976px;
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
                gap: 50px;
            }

            .label-container3 {
                display: flex;
                align-items: center;
                gap: 30px;
            }
            .label-container4{
                display: flex;
                align-items: center;
                gap: 87px;
            }


            .label-container2 {
                display: flex;
                align-items: center;
                gap:90px;                
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
            <h1>Edit home page </h1>

            <?php
            session_start();
            include 'database.php';
            include 'fetch_data.php';

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                $description = $_POST['disc'];
                $date = $_POST['date'];
                $File = $_FILES['file']['name'];
                $category = $_POST['category'];



                $UploadPath = 'uploads/edit_hp/' . $File;
                $sql = "INSERT INTO edit_homepage (category, file, description, date) VALUES ('$category', '$UploadPath', '$description', '$date')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    move_uploaded_file($_FILES['file']['tmp_name'], $UploadPath);
                    mysqli_close($conn);
                    header('Location: DashAdmin.php');
                    exit;

                } else {
                    echo "Error: " . mysqli_error($conn);
                }


            }


            ?>

            <form action="edit_home_page.php" method="post" enctype="multipart/form-data">


                <div class="label-container1">
                    <label class="label" for="category">Category</label>
                    <select id="category" name="category">
                        <option value="notices">Notices</option>
                        <option value="events">Events</option>
                        <option value="acheivement">Achievements</option>                                                
                    </select>

                </div>
                <br>
                <div class="label-container2">
                    <label class="label" for="file">File</label>
                    <div class="upload-btn" onclick="chooseFile('file')">
                        Choose file
                        <input type="file" id="file" name="file" accept="image/*" required />
                    </div>

                </div>

                <br>
                <div class="label-container3">

                    <label class="label" for="disc">Description</label>
                    <input type="text" id="disc" name="disc" required>

                </div>


                <br>
                <div class="label-container4">
                    <label class="label" for="ate">Date</label>
                    <input type="date" id="date" name="date" required>
                </div>

                <br>




                <button class="addbutton" type="submit"><br>Submit</button>
            </form>
        </div>
    </body>

</html>