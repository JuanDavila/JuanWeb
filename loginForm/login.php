<?php

//echo var_dump($_POST);

$mailCorrecto = "email@email.com";
$passCorecto = "mipassword";

if($_POST["email"]== $mailCorrecto && $_POST["pass"]== $passCorecto){
	session_start();
	$_SESSION["userid"] = "jefe";
	header("Location: http://juan.techtalents.cool/content.php");
	die();
}else{
	session_unset();
	session_destroy();
	header("Location: http://juan.techtalents.cool/loginForm/index.php?incorrectPass=true");
	die();
}

?>