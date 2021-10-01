<?php

if(isset($_SESSION["userid"])){
    echo'<form action="managecart.php" method="post">';
}
else{
    echo'<form action="signup.php" method="post">';
}

$sqlcart = "INSERT INTO cart (date, userId, Pid) VALUES('".$date."', ".$uid.", ".$pid.");";

$a = 5;
$b = number_format((float)$a, 1, '.', '');
echo $b;

$_SESSION['total'] = number_format((float)$ttotal, 1, '.', '');
