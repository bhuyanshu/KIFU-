<?php 
    include_once 'dbh.inc.php';

    $reqto = $_POST['reqto']; 
    $reqfor = $_POST['reqfrom'];


    $sql = " INSERT INTO requests ( reqto, reqby) 
    VALUES ('$reqto', '$reqfor');";

    mysqli_query($conn, $sql);

    header("Location: /connect/donorlist.php?signup=success");