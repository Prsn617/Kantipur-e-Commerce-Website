<?php

session_start();
$_SESSION['admin'] = '';

$reward = 0;
function emptyInputSignup($name, $email, $pass){
    $result;
    if(empty($name) || empty($email) || empty($pass)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $email){
    $sql = "SELECT * FROM user_info WHERE userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $pass, $reward){
    $sql = "INSERT INTO user_info (userName, userEmail, userPass, userReward) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        die("<pre>Prepare failed:\n".mysqli_error($conn)."\n$sql</pre>");
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $hashed_pass, $reward);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php");
    exit();

}

function emptyInputLogin($email, $pass){
    $result;
    if(empty($email) || empty($pass)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $pass){

    $uidExists = uidExists($conn, $email);
    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPass"];
    $checkpass = password_verify($pass, $pwdHashed);

    if($checkpass === false){
        header("location: ../login.php?error=wronglogin2");
        exit();
    }
    elseif($checkpass === true){
        if($email == 'admin@ktp.com' && $pass == 'prsn617'){
            $_SESSION["admin"] = 'Admin';
            header("location: ../admin.php");
            exit();
        }
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["username"] = $uidExists["userName"];
        $_SESSION["userpass"] = $uidExists["userPass"];
        $_SESSION["useremail"] = $uidExists["userEmail"];
        $_SESSION["admin"] = '';
        header("location: ../index.php");
        exit();
    }
}