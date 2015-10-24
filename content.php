<?php
session_start();
if($_SESSION["userid"]=="jefe"){
	echo "contenido protegido";
}else{
	header("Location: http://juan.techtalents.cool/loginForm/index.php");
	die();
}

?>