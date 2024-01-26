<!DOCTYPE html>
<html>

    <head>
        <title>Add Testimonial</title>
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

            input[type="text"] {
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
                gap: 100px;
            }

            .label-container3 {
                display: flex;
                align-items: center;
                gap: 50px;
            }

            .label-container4 {
                display: flex;
                align-items: center;
                gap: 105px;
            }


            .label-container2 {
                display: flex;
                align-items: center;
                gap: 95px;
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
            <h1>Add Testimonial</h1>

            <?php
            session_start();
            include 'database.php';
            include 'fetch_data.php';

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                $name = $_POST['name'];
                $desc = $_POST['desc'];
                $image = $_FILES['file']['name'];
                $role = $_POST['role'];



                $UploadPath = 'uploads/edit_hp/' . $image;
                $sql = "INSERT INTO testimonial(name, image, description, role) VALUES ('$name', '$UploadPath', '$desc', '$role')";
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

            <form action="testimonial.php" method="post" enctype="multipart/form-data">
                <div class="label-container1">

                    <label class="label" for="name">Name</label>
                    <input type="text" id="name" name="name" required>

                </div>

                <br>
                <div class="label-container2">
                    <label class="label" for="file">Image</label>
                    <div class="upload-btn" onclick="chooseFile('file')">
                        Choose file
                        <input type="file" id="file" name="file" accept="image/*" required />
                    </div>

                </div>

                <br>
                <div class="label-container3">

                    <label class="label" for="desc">Description</label>
                    <input type="text" id="desc" name="desc" required>

                </div>


                <br>
                <div class="label-container4">
                    <label class="label" for="ate">Role</label>
                    <input type="text" id="role" name="role" required>
                </div>

                <br>




                <button class="addbutton" type="submit"><br>Submit</button>
            </form>
        </div>
    </body>

</html>