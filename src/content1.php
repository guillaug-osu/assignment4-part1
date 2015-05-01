<?php


if (isset($_POST["username"]) && !empty($_POST["username"]))
{

    session_start();
	$_SESSION['username'] = $_POST["username"];
	$_SESSION['count'] = 0;
    session_write_close();
    header("location: content2.php");
    exit();
}
else
{
    echo "A username must be entered. Click <a href='login.php'>here</a> to return to the login screen.";
}
