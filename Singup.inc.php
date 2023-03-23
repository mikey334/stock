<?php
require_once("includes/initialize.php");

$User_Name = $_POST['UserName'];
$Full_Name = $_POST['Full_Name'];
$phone = $_POST['Phone'];
$Position = $_POST['Position'];
$Password = sha1($_POST['Password']);
$created =  strftime("%Y-%m-%d %H:%M:%S", time());


global $mydb;
$mydb->setQuery ( "INSERT INTO `user_info` (`UserName`, `Full_Name`,  `Phone`, `Position`, `Pword`, `created`) 
VALUES  ('{$User_Name}','{$Full_Name }','{$phone}','{$Position}','{$Password}' ,'{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {
        
                   echo "<script type=\"text/javascript\">
                   alert(\"Welcome $Full_Name For Now on you can Signin .\");
                   window.location = './index.php';
               </script>";
} else{
    
    echo "<script type=\"text/javascript\">
                alert(\"fail.\");
                window.location = 'creat.php';
            </script>";
}


//?>