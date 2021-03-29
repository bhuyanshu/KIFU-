<?php
//connect 
// $con = mysqli_connect('localhost','root','');
// mysqli_Select_db($con,'blood');

include('session.php');

if(isset($_POST['delete'])){
    $appid = $_POST['id'];
}

//update the query 
$sql = "delete from appointment where appid ='$appid'";

//execute the query 
if(mysqli_query($conn,$sql)){
    header("refresh:1 ; url = /connect/appoint.php");
}
else
    echo " Not updated ";

?>

