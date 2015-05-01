<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['username']);

	session_destroy();
	
	header( 'Location: login.php'); 
?>