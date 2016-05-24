<?php
	session_start();
	
	$_SESSION['se_id']	= 0;
	$_SESSION['error_msg']	= "";
	header ('location: index.php');
	
?>