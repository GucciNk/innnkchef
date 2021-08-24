<?php

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["user_password"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username,$user_password)!== false){
        session_start();
        header("location: ../pages(New User)/index.php?error=emptyinput ");
      
        exit();
    }

    loginUser($conn,$username,$user_password);

}else{
    header("location: ../pages(New User)/index.php");

        exit();
}