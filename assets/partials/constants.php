<?php 
    //Start Session    
    ob_start();
   session_start();


    //Create Constants to Store Non Repeating Values
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'styleijr_prega');
    define('DB_PASSWORD', 'pregamate@2020');
    define('DB_NAME', 'styleijr_pregamate');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //Selecting Database


?>