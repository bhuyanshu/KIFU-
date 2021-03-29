<?php 
    include_once 'dbh.inc.php';

    $name = $_POST['name']; 
    $pwd = $_POST['password']; 
    $age = $_POST['age']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $state = $_POST['State']; 
    $city = $_POST['city']; 
    $sex = $_POST['sex']; 
    $bg = $_POST['blood_group']; 


    $sql = " INSERT INTO users ( username, password, age, email, phone, state, city, sex, bloodgroup) 
    VALUES ('$name', '$pwd', $age, '$email',$phone,'$state' ,'$city','$sex', '$bg');";

    mysqli_query($conn, $sql);

    header("Location: ../includes/loginp.php?signup=success");