<?php

if(isset($_POST["submit"])){
    
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $username = $_POST["username"];
    $user_password = $_POST["user_password"];
    $user_pwdr = $_POST["user_pwdr"];
    $user_gender = $_POST["user_gender"];
    $user_telephone = $_POST["user_telephone"];
    $user_date = $_POST["user_date"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($user_name,$username,$user_email,$user_password,$user_pwdr,$user_gender,$user_telephone,$user_date)!== false){
        header("location: ../pages(New User)/index.php?error=emptyinput ");
        exit();
    }
    if(invalidUid($user_name)!== false){
        header("location: ../pages(New User)/index.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($user_email)!== false){
        header("location: ../pages(New User)/index.php?error=invalidemail");
        exit();
    }
    if(passwordMatch($user_password,$user_pwdr)!== false){
        header("location: ../pages(New User)/index.php?error=unmatchpasswords ");
        exit();
    }
    if(uidExists($conn,$username,$user_email)!== false){
        header("location: ../pages(New User)/index.php?error=usernametaken");
        exit();
    }
    
    createUser($conn,$user_name,$user_email,$username,$user_password,$user_gender,$user_telephone,$user_date);


}else{
    header("location: ../pages(New User)/index.php");
    exit();
}