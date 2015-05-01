<?php
//require_once( 'php/auth.php');

if (isset($_POST["username"]) && !empty($_POST["username"]))
{
    echo $_POST["username"];
}
else
{
    echo "A username must be entered. Click <a href='login.php'>here</a> to return to the login screen.";
}


//echo json_encode();