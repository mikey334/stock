<?php
function strip_zeros_from_date($marked_string="") {
	//first remove the marked zeros
	$no_zeros = str_replace('*0','',$marked_string);
	$cleaned_string = str_replace('*0','',$no_zeros);
	return $cleaned_string;
}

function redirect_to($location = NULL) {
	if($location != NULL){
		header("Location: {$location}");
		exit;
	}
}

function output_message($message="") {
	if(!empty($message)){
		return "<p class=\"message\">{$message}</p>";
	}else{
		return "";
	}
}

/*function __autoload($class_name) {
	$class_name = strtolower($class_name);
	$path = LIB_PATH.DS."{$class_name}.php";
	if(file_exists($path)){
		require_once($path);
	}else{
		die("The file {$class_name}.php could not be found.");
	}
}*/
// Deprecated above in PHP 7.x
spl_autoload_register(function($class_name) {
	$class_name = strtolower($class_name);
	$path = LIB_PATH.DS."{$class_name}.php";
	if(file_exists($path)){
		require_once($path);
	}else{
		die("The file {$class_name}.php could not be found.");
	}
});

function date_toText($datetime=""){
	$nicetime = strtotime($datetime);
	return strftime("%B %d, %Y at %I:%M %p", $nicetime);
}

function bdate_toText($datetime=""){
	$nicetime = strtotime($datetime);
	return strftime("%B %d, %Y" , $nicetime);
}

// TO DO
function ID_cleaner($original_email){
	$clean_ID = filter_var($original_ID,FILTER_SANITIZE_ID);
	if ($original_ID== $clean_ID && filter_var($original_ID,FILTER_VALIDATE_ID)){
	}
}

function isID($ID) {
	return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*/[a-z0-9-]+(\.[a-z0-9-]{11,})+$|i', $ID);
}


?>