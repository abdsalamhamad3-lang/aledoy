<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

include('token.php');

// Retrieve form inputs
$Name       = trim($_POST['full_name'] ?? '');
$Email      = trim($_POST['email'] ?? '');
$Phone      = trim($_POST['phone'] ?? '');
$AgeRange   = trim($_POST['age_range'] ?? '');
$Country    = trim($_POST['country'] ?? '');
$City       = trim($_POST['city'] ?? '');
$CareerGoal = trim($_POST['career_goal'] ?? '');

$num_check = strlen($Phone);

// Check for blank fields
if ($Name == '' || $Email == '' || $Phone == '' || $Country == '' || $City == '') {
    $error = 'All primary contact details are required to reserve your seat.';
    include('index.php');
    exit;
}

// Validate email
if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $error = 'Please enter a valid email address.';
    include('index.php');
    exit;
}

// Validate phone number
if ($num_check != 11) {
    $error = 'Enter a valid 11-digit GSM phone number.';
    include('index.php');
    exit;
}

// ---- Database connection ----
$dbHost = 'localhost';
$dbName = 'aledusbx_tech_after';
$dbUser = 'aledusbx_tech_after';
$dbPass = 'Aledoy@2026!';

$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($mysqli->connect_errno) {
    $error = 'Sorry, your registration could not be processed. Please try again.';
    include('index.php');
    exit;
}

$mysqli->set_charset('utf8mb4');

// Insert into registration table using a prepared statement
$stmt = $mysqli->prepare(
    "INSERT INTO registration (full_name, email, phone, age_range, country, city, career_goal)
     VALUES (?, ?, ?, ?, ?, ?, ?)"
);

$stmt->bind_param(
    'sssssss',
    $Name,
    $Email,
    $Phone,
    $AgeRange,
    $Country,
    $City,
    $CareerGoal
);

$dbInsertOk = $stmt->execute();
$stmt->close();
$mysqli->close();

if (!$dbInsertOk) {
    $error = 'Sorry, your registration could not be processed. Please try again.';
    include('index.php');
    exit;
}

// ---- Email notification ----
$mail = new PHPMailer(true);

try {

    // SMTP Settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'aledoysolutions2@gmail.com';
    $mail->Password   = 'zuvw gzmb ljea kcga'; // TODO: move to env var / config, not hardcoded
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Sender & Receiver
    $mail->setFrom('aledoysolutions2@gmail.com', 'Aledoy Academy');
    $mail->addAddress('luabikoye@yahoo.com');
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
    if ($file) {
        fwrite($file, $mail->Body . "\n\n");
        fclose($file);
    }

    //push data to maillite

    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://connect.mailerlite.com/api/subscribers',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "email": "'.$Email.'",
    "fields": {
      "name": "'.$firstname.'",
      "last_name": "'.$lastname.'"
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer '.$api_key
  ),
));

$response = curl_exec($curl);

// echo $response; exit;

curl_close($curl);


    $success = 'Your seat has been reserved successfully!';


} catch (Exception $e) {
    // DB record is already saved even if email fails
    $success = 'Your seat has been reserved successfully! (Confirmation email could not be sent.)';
}

include('index.php');
exit;

?>