<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

//require 'PHPMailer/src/Exception.php';
//require 'PHPMailer/src/PHPMailer.php';
//require 'PHPMailer/src/SMTP.php';

// Retrieve form inputs
$Name       = $_POST['full_name'];
$Email      = $_POST['email'];
$Phone      = $_POST['phone'];
$AgeRange   = $_POST['age_range'];
$Country    = $_POST['country'];
$City       = $_POST['city'];
$CareerGoal = $_POST['career_goal'];

$num_check = strlen($Phone);

// Check for blank fields
if($Name == '' || $Email == '' || $Phone == '' || $Country == '' || $City == '')
{
    $error = 'All primary contact details are required to reserve your seat.';
    include('index.php');
    exit;
}

// Validate email
if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
{
    $error = 'Please enter a valid email address.';
    include('index.php');
    exit;
}

// Validate phone number
if($num_check != 11)
{
    $error = 'Enter a valid 11-digit GSM phone number.';
    include('index.php');
    exit;
}

$mail = new PHPMailer(true);

try {

    // SMTP Settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'aledoysolutions2@gmail.com';
    $mail->Password   = 'zuvw gzmb ljea kcga';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Sender & Receiver
    $mail->setFrom('aledoysolutions2@gmail.com', 'Aledoy Academy');
    $mail->addAddress('abdsalamhamad3@gmail.com');
    $mail->addReplyTo($Email, $Name);

    // Email Content
    $mail->isHTML(false);
    $mail->Subject = 'New Tech After 35 Masterclass Registration';

    $mail->Body = "Below is the information that was filled out:\n\n";
    $mail->Body .= "Name: $Name\n";
    $mail->Body .= "Email: $Email\n";
    $mail->Body .= "Phone: $Phone\n";
    $mail->Body .= "Age Range: $AgeRange\n";
    $mail->Body .= "Location: $City, $Country\n";
    $mail->Body .= "Primary Career Goal: $CareerGoal\n";
    $mail->Body .= "******************************************\n";

    // Send Email
    $mail->send();

    // Save backup
    $file = fopen('data.txt', 'a');
    if($file)
    {
        fwrite($file, $mail->Body . "\n\n");
        fclose($file);
    }

    $success = 'Your seat has been reserved successfully! Check your email for access instructions.';
}
catch (Exception $e)
{
    $error = 'Sorry, your registration could not be processed. Please try again.';
}

include('index.php');
exit;

?>