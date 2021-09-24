<?php

if($_GET['q'] == 'su'){
    $url = "https://uat.esewa.com.np/epay/transrec";
    $data =[
        'amt'=> $_GET[''],
        'rid'=> '000AE01',
        'pid'=>'ee2c3ca1-696b-4cc5-a6be-2c40d929d453',
        'scd'=> 'EPAYTEST'
    ];

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        echo $response;
        curl_close($curl);
}

if($_GET['q'] == 'fu'){
    echo '<h1>This will be the end of wakanda</h1>';
}