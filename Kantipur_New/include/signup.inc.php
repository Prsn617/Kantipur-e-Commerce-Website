<?php

if(isset($_POST['signup-submit'])){

    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $reward = 0;

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $pass) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if(uidExists($conn, $email) !== false){
        header("location: ../signup.php?error=emailtaken");
        exit();
    }

    createUser($conn, $name, $email, $pass, $reward);
}

else{
    header("location: ../signup.php");
    exit();
}