<?php 
    include_once 'dbh.inc.php';

    $id = $_POST['bbid']; 
    $name = $_POST['name']; 
    $bg = $_POST['bloodgroup']; 
    $date = $_POST['date']; 
    $time = $_POST['time']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
     

    $sql = " INSERT INTO appointment ( id, username, bg, date, time,email, phone) 
    VALUES ('$id', '$name', '$bg', '$date','$time','$email' ,$phone);";

    mysqli_query($conn, $sql);

    header("Location: /connect/donate.php?signup=success");
