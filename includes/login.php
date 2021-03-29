<?php
include('dbh.inc.php');
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if($_SERVER["REQUEST_METHOD"] == "POST"){

if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

// $conn = mysqli_connect("localhost", "root", "", "bloodbank");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT * from users where username=? AND password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $username; // Initializing Session
header("location: /connect/profile.php"); // Redirecting To Profile Page

}
mysqli_close($conn); // Closing Connection
}
?>