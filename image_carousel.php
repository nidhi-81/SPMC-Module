<!DOCTYPE html>
<html>

    <head>
        <title>Add image to carousel</title>
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


            .addbutton {
                font-size: 15px;
                padding: 0px 20px 16px 20px;
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
                gap: 90px;
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
            <h1>Add image to carousel</h1>

            <?php
            session_start();
            include 'database.php';
            include 'fetch_data.php';

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                
                $File = $_FILES['file']['name'];                



                $UploadPath = 'uploads/edit_hp/' . $File;
                $sql = "INSERT INTO image_carousel VALUES ('$UploadPath')";
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

            <form action="image_carousel.php" method="post" enctype="multipart/form-data">



                <div class="label-container1">
                    <label class="label" for="file">File</label>
                    <div class="upload-btn" onclick="chooseFile('file')">
                        Choose file
                        <input type="file" id="file" name="file" accept="image/*" required />
                    </div>

                </div>


                <button class="addbutton" type="submit"><br>Submit</button>
            </form>
        </div>
    </body>

</html>