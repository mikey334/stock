﻿<?php
require_once("includes/initialize.php");	

$upload_errors = array(
UPLOAD_ERR_OK	      => "No errors.",
UPLOAD_ERR_INI_SIZE	  => "Larger than upload_max_filesize.",
UPLOAD_ERR_FORM_SIZE  => "Larger than form MAX_FILE_SIZE.",
UPLOAD_ERR_PARTIAL	  => "Partial upload.",
UPLOAD_ERR_NO_FILE    => "No file.",
UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
UPLOAD_ERR_EXTENSION  => "File upload stopped by extension.",
);
if (isset($_POST['savelogo'])){
			
	 $tmp_file = $_FILES['upload_file']['tmp_name'];
	 @$target_file = basename($_FILES['upload_file']['name']);
	  $upload_dir = "uploads";
	  $imgtype = $_FILES['upload_file']['type'];
	 $imgsize = $_FILES['upload_file']['size'];	
	    $UserName= $_SESSION['UserName'];
        $created =  strftime("%Y-%m-%d %H:%M:%S", time());
	
	if ($imgtype == 'image/jpeg' || 'image/png' || 'image/gif' ) {
		
	if (move_uploaded_file($tmp_file,$upload_dir."/".$target_file)){
			global $mydb;
			
						
			
$mydb->setQuery("INSERT INTO `ims`.`user_profile` (`filename`, `type`, `size`, `UserName`, `created`)
VALUES ('{$target_file}', '{$imgtype}', '{$imgsize}', '{$UserName}','{$created}' )");
$mydb->executeQuery();
			if ($mydb->affected_rows() == 1) {
				
				echo "<script type=\"text/javascript\">
							alert(\"Your Photo Have Been Saved Successfuly .\");
							window.location=history.back();
						</script>";
				
			} else{
				echo "<script type=\"text/javascript\">
							alert(\" i can't upload your photo something missing!\");
							window.location=history.back();
						</script>";
			}
		
			//echo "File uploaded Succesfully";
			
		}else{
			$error = $_FILES['upload_file']['error'];
			$message = $upload_errors[$error];
			echo "<script type=\"text/javascript\">
							alert(\".{$message}.\");
							
						</script>";
		}
		
		} else {
		echo "<script type=\"text/javascript\">
							alert(\"Invalid Image format.\");
							window.location='home.php';
						</script>";
			
		
		}
	
}
?>




















