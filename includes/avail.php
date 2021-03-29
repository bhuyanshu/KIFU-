<?php

require('session.php');

//update the query 
$sql = "update users SET isavail ='$_POST[isavail]' where username = '$user_check'";

//execute the query 
if(mysqli_query($conn,$sql)){
    header("refresh:1 ; url = /connect/donate.php");
}
else
    echo " Not updated ";

?>