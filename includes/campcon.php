<?php 
    include('dbh.inc.php');
    // include('session.php');

    $name = $_POST['name'];
    $org = $_POST['org']; 
    $place = $_POST['venue'];  
    $email = $_POST['email']; 
    $phone = $_POST['phone'];  
    $city = $_POST['city']; 
    $state = $_POST['state']; 
    $nod = $_POST['nod']; 
    $strength = $_POST['strength']; 
    $date = $_POST['date']; 
    $comments = $_POST['comments']; 
     

    $sql = "INSERT INTO `camps`(`name`, `org`, `place`, `email`, `phone`, `city`, `state`, `nod`, `strength`, `date`, `comments`) VALUES ('$name','$org','$place','$email',$phone,'$city','$state',$nod,$strength,'$date','$comments');";

    // $sql = " INSERT INTO camps ( name, org, place,email, phone,city,state,nod,strength,date,comments) 
    // VALUES ('$name', '$org', '$place','$email' ,$phone,'$city','$state',$nod,$strength,'$date',$comments);";

    mysqli_query($conn, $sql);

    header("Location: /connect/donate.php?d=success");