<?php
//Include required PHPMailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantipur Chocolate Mart</title>
    <link rel="stylesheet" href="css/success.css">
</head>
<body>
    
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "kantipur");
$total = $_SESSION['total'];
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


    $rew = $_SESSION['reward'];

    if(strpos($response, "Success") !== false){
        if($_SESSION['rewCheck']){
            $sqlRee = "UPDATE user_info SET userReward = userReward - $rew WHERE userId =". $_SESSION["userid"];
            mysqli_query($conn, $sqlRee);
        }
        $count = count($_SESSION['cart']);
        $reward = floor($_SESSION['totaln']/10);

        $sqlLast = "SELECT * FROM cart ORDER BY cartId DESC LIMIT 1;";
        $sqlReward = "UPDATE user_info SET userReward = userReward + $reward WHERE userId =". $_SESSION["userid"];
        mysqli_query($conn, $sqlReward);
        $res = mysqli_query($conn, $sqlLast);
        $rows = mysqli_fetch_assoc($res);
        $lastId = $rows['cartId'];

        $sId = $lastId - $count + 1;

        $date = date("j M y");
        $sqlcheck = "SELECT * FROM sales WHERE TRIM(date)='".$date."'";
        mysqli_query($conn, $sqlcheck);

        if(mysqli_affected_rows($conn) > 0){
            $sqlsale = "UPDATE sales SET sales = sales + $total WHERE TRIM(date)='".$date."'";
        }
        else{
            $sqlsale = "INSERT INTO sales(date, sales) VALUES('".$date."', ".$total.")";
        }
        mysqli_query($conn, $sqlsale) or die(mysqli_error());

        for($i = $sId; $i <= $lastId; $i++){
            $sqlStatus = "UPDATE cart SET status=1 WHERE cartId =$i";
            mysqli_query($conn, $sqlStatus);
        }

        $to = $_SESSION["useremail"];
        $subject = "Order Placed, Kantipur Chocolate Mart";
        $messege = "Kantipur Chocolate Mart \n";
        $messege .= "<table align ='center'>";
        $messege .= "<tr>";
        $messege .= "<th> Name </th>";
        $messege .= "<th> Quantity </th>";
        $messege .= "<th> Amount </th>";
        $messege .= "<th> Total </th>";
        $messege .= "</tr>";
        foreach($_SESSION['cart'] as $key => $value){
            $pid = $value['Pid'];
            $sqlBill = "SELECT * FROM product WHERE prdNo =".$pid;
            $q = mysqli_query($conn, $sqlBill);
            $r = mysqli_fetch_assoc($q);
            $prdNam = $r['prdName'];
            $prdPric = $r['prdPrice'];
            $qt = $value['num'];
            $prdTotal = $qt * $prdPric;
            $messege .= "<tr>";
            $messege .= "<td>".$prdNam."</td>";
            $messege .= "<td>".$qt."</td>";
            $messege .= "<td>".$prdPric."</td>";
            $messege .= "<td>".$prdTotal."</td>";
            $messege .= "</tr>";
        }
        $messege .= "<tr>";
        $messege .= "<td colspan='3'>Total with Rewards(if used)</td>";
        $messege .= "<td>".$_SESSION['totaln']."</td>";
        $messege .= "</td>";        

        $messege .= "</table><br>";
        $from = "prsn617@gmail.com";
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Kantipur Chocolate Mart <prsn617@gmail.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

        //Create instance of PHPMailer
	        $mail = new PHPMailer();
        //Set mailer to use smtp
            $mail->IsSMTP();
            //$mail->SMTPDebug = 2;
        //Define smtp host
            $mail->Host = "smtp.gmail.com";
        //Enable smtp authentication
            $mail->SMTPAuth = true;
        //Set smtp encryption type (ssl/tls)
            $mail->SMTPSecure = "tls";
        //Port to connect smtp
            $mail->Port = 587;
        //Set gmail username
            $mail->Username = "prsn617@gmail.com";
        //Set gmail password
            $mail->Password = "********";
            
        //Email subject
            $mail->Subject = "Order Placed, Kantipur Chocolate Mart";
        //Set sender email
            $mail->setFrom('prsn617@gmail.com');
        //Enable HTML
            $mail->isHTML(true);
        //Email body
            $mail->Body = $messege;
        //Add recipient
            $mail->addAddress($to);
        //Finally send email
            if ( $mail->send() ) {
                echo "Email Sent..!";
            }else{
                echo "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
            }
        //Closing smtp connection
            $mail->smtpClose();
            
        echo $messege;
        //unset($_SESSION['cart']);
        // echo"<script>
        //         alert('Order Placed Successfully');
        //         window.location.href = 'index.php';
        //     </script>";
        mysqli_close($conn);
        $messege = "";
    }
    else if(strpos($response, "failure") !== false){
        echo"<script>
                alert('Order Failed');
                window.location.href = 'index.php';
            </script>";
    }
    else{
        echo"<script>
                alert('Something went wrong');
                window.location.href = 'index.php';
            </script>";
    }

    

