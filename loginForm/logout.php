<?php
session_start();
session_unset();
session_destroy();
header("Location: http://juan.techtalents.cool/index.php");
	die();
?>