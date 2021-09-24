<?php
/* If you're reading this, you're Stupid...*/
if(isset($_POST['login-submit'])){

    $email = $_POST['email'];
    $pass = $_POST['password'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($email, $pass) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    loginUser($conn, $email, $pass);
}

else{
    header("location: ../login.php");
    exit();
}