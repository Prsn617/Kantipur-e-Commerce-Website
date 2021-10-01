<?php

session_start();

$ref = $_GET['refId'];
$url = "https://uat.esewa.com.np/epay/transrec";
$data =[
    'amt'=> $_SESSION['total'],
    'rid'=> $ref,
    'pid'=> $_SESSION['rpid'],
    'scd'=> 'EPAYTEST'
];

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    echo $response;
    echo $_SESSION['rpid'];
    echo $_SESSION['total'];
    echo $ref;

    if(strpos($response, "Success") !== false){
        echo'<h1>Payment Success</h1>';
    }
    else if(strpos($response, "failure") !== false){
        echo'<h1>Payment Failed</h1>';
    }
    else{
        echo'<h1>Bruhh</h1>';
    }