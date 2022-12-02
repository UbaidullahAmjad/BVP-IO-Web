<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


    // $charity_name = $_POST['name'];
    // $charity_country = $_POST['country'];
    // $registration = $_POST['registration'];
    // $person_name = $_POST['person_name'];
    // $person_email = $_POST['email'];
    // $amount = $_POST['amount'];
    // $tellus = $_POST['tellus'];


    // $data =
    // "Charity Name: ". $charity_name . "\n".
    // "Charity Country: ". $charity_country . "\n".
    // "Registration Number: ". $registration . "\n".
    // "Person Name: ". $person_name . "\n".
    // "Charity Email: ". $person_email . "\n".
    // "Amount: ". $amount . "\n".
    // "Description: ". $tellus . "\n";



    require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/SMTP.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 1;
    
    $mail->Mailer = "sendmail";
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
$mail->Body = "body";


if($mail->send()){

    echo "success";
    
    // header('Location: index.html');
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
    // mail("irfan.elahi187@gmail.com","My subject",$data);



















//  require_once "Mail.php";

// set_time_limit(0);

//  $from = "test1874242@yahoo.com";
//  $to = "test1874242@yahoo.com";
//  $subject = "Hi!";
//  $body = "Hi,\n\nHow are you?";
 
//  $host = "smtp.yahoo.com";
//  $username = "test1874242@yahoo.com";
//  $password = "test123456789@#_";
//  $port = 587;
//  $mail_encryption = tls;
 
// //  $headers = array ('From' => $from,
// //   'To' => $to,
// //   'Subject' => $subject);
//  $headers = [
//      'From' => $from,
//   'To' => $to,
//   'Subject' => $subject
//      ];
   
// //   echo gettype($headers);exit;
   
//  $smtp = Mail::factory('sendmail',
//   array ('host' => $host,
//      'auth' => true,
//      'username' => $username,
//      'password' => $password,
//      'port' => $port,
//      ));
 
//  $mail = $smtp->send($to,$headers,$body);
// //  print_r($mail);exit;
//  if (PEAR::isError($mail)) {
//   echo("<p>" . $mail->getMessage() . "</p>");
//   } else {
//   echo("<p>Message successfully sent!</p>");
// }
 
