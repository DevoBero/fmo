<?php
if(!empty($_SESSION['username'])){
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'registration';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $username = $_SESSION['username'];
    $result = $db->query("SELECT * FROM users WHERE username = '$username'");
    
    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
    
       $feedback = $data['feedback'];
    }else{
        echo 'Data not found...';
    }
}
?>
