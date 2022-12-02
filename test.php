<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


    $charity_name = $_POST['name'];
    $charity_country = $_POST['country'];
    $registration = $_POST['registration'];
    $person_name = $_POST['person_name'];
    $person_email = $_POST['email'];
    $amount = $_POST['amount'];
    $tellus = $_POST['tellus'];


    $data =
    "Charity Name: ". $charity_name . "\n".
    "Charity Country: ". $charity_country . "\n".
    "Registration Number: ". $registration . "\n".
    "Person Name: ". $person_name . "\n".
    "Charity Email: ". $person_email . "\n".
    "Amount: ". $amount . "\n".
    "Description: ". $tellus . "\n";



    require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/SMTP.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
// $mail->SMTPAutoTLS = false;
    $mail->Username = "tes54651@gmail.com";
    $mail->Password = "test1234_";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";



$mail->From = "tes54651@gmail.com";
$mail->FromName = "BVP";
$mail->AddAddress("tes54651@gmail.com");
$mail->Subject = "Donation Request";
$mail->Body = $data;


if($mail->send()){

    echo "success";
    header('Location: index.html');
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
    // mail("irfan.elahi187@gmail.com","My subject",$data);


?>