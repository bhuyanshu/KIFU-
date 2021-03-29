<?php
require('session.php');

//update the query 
$sql = "update users SET phone ='$_POST[phone]',email ='$_POST[email]',city ='$_POST[city]',state ='$_POST[state]' where username = '$user_check'";

//execute the query 
if(mysqli_query($conn,$sql)){
    header("refresh:1 ; url = /connect/profile.php");
}
else
    echo " Not updated ";

?>