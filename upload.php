<?php
session_start(); 
$username = $_SESSION['username'];
$uploadOk = 1;
$feedback="feedback";
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if(isset($check) !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if file already exists
        // if (file_exists($target_file)) {
        //     echo "Sorry, file already exists.";
        //     $uploadOk = 0;
        // }

          // Check file size
        // if ($_FILES["fileToUpload"]["size"] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }
                // Allow certain file formats
        // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        // && $imageFileType != "gif" ) {
        //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        //     $uploadOk = 0;
        // }

    if(isset($check)){
        $image = $_FILES['image']['name'];
        $uploadfile = $_FILES['image']['tmp_name'];
        $path = "db_image/".basename($image);
        $feedback =  htmlspecialchars($_POST['feedback']);
        move_uploaded_file($uploadfile, $path);
        var_dump('feedback');
        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'registration';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database 
        $username = $_SESSION['username'];
        $dql = "UPDATE users SET image='$image', feedback='$feedback' WHERE username='$username'";
        //echo $dql;
        $insert = $db->query($dql);
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.".mysqli_error($db);
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>