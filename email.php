<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$contact = new PHPMailer(true);

$contact->isSMTP();
$contact->SMTPAuth = true;


$contact->Host = "smtp.gmail.com";
$contact->SMTPSecure = 'tsl';
$contact->Port = 587;

$contact->Username = "montec.romester@gmail.com";
$contact->Password = "rafael123";

$contact->setFrom($email, $name);
$contact->addAddress("montec.romestec@gmail.com", "rafael");

$contact->Subject = $_POST["subject"];
$contact->message = $_POST["message"];

$contact->send();

echo "email sent";
?>