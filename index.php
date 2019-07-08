<?php
    session_start();

    //mysql
    $db_user='root';
    $db_pass='';
    $db_host='localhost';
    $db_database='simonidak';
    $mycon=@mysqli_connect($db_host,$db_user,$db_pass,$db_database);
    if(!$mycon){
        echo "Error: Unable to connect to MySQL.<br />";
        echo "Debugging errno: " . mysqli_connect_errno() . "<br />";
        echo "Debugging error: " . mysqli_connect_error() . "<br />";
        exit;
    }

    if(!isset($_SESSION['login'])){
        include 'login.php';
    }else{
        include 'main.php';
    }
    
    mysqli_close($mycon);
?>