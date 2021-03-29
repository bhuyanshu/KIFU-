<?php
session_start();
if(session_destroy()) // Destroying All Sessions 
{
header("Location: loginp.php"); // Redirecting To Home Page
}
?>