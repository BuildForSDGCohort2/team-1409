<?php

//get values
    $username = $_POST['username'];
    $password = $_POST['password'];

    //to prevent sql injection
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($username);
    $password = mysqli_real_escape_string($password);

    //connect to the db
    mysqli_connect("localhost","root","","safegas");

    //query the db
    $result = mysqli_query("select * from registeruser where username = '$username' and password = '$password'")
    or die("failed to query database " mysqli_error());
    $row = mysqli_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password){
        echo "login success";
    }else{
        echo "failed to login";

    }









?>
