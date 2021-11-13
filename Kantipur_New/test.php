<?php
    //Include required PHPMailer files
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
    
    //Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Create instance of PHPMailer
	    $mail = new PHPMailer();
    //Set mailer to use smtp
        $mail->isSMTP();
    //Define smtp host
        $mail->Host = "smtp.gmail.com";
    //Enable smtp authentication
        $mail->SMTPAuth = true;
    //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = "tls";
    //Port to connect smtp
        $mail->Port = "587";
    //Set gmail username

        $to = "maniknepal@gmail.com";
        //$to = $_SESSION["useremail"];
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
        $messege .= "</table><br>";
        $from = "prsn617@gmail.com";
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Kantipur Chocolate Mart <prsn617@gmail.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

        $mail->Username = "prsn617@gmail.com";
        //Set gmail password
            $mail->Password = "N55g264A2N$&ubddYw";
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