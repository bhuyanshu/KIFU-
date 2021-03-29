<?php
require('session.php');

//update the query 
$sql = "update users SET username ='$_POST[username]',age ='$_POST[age]',sex ='$_POST[sex]',bloodgroup ='$_POST[bloodgroup]' where username = '$user_check'";

//execute the query 
if(mysqli_query($conn,$sql)){
    header("refresh:1 ; url = /connect/profileset.php");
}
else
    echo " Not updated ";

?>