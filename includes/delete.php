<?php
//connect 
// $con = mysqli_connect('localhost','root','');
// mysqli_Select_db($con,'blood');

include('session.php');

//update the query 
$sql = "delete from users where username ='$user_check'";

//execute the query 
if(mysqli_query($conn,$sql)){
    header("refresh:1 ; url = loginp.php");
}
else
    echo " Not updated ";

?>

