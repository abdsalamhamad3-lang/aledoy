<?php
  // Retrieve form inputs using exact 'name' attributes from your HTML
  $Name       = $_POST['full_name'];
  $Email      = $_POST['email'];
  $Phone      = $_POST['phone'];
  $AgeRange   = $_POST['age_range'];
  $Country    = $_POST['country'];
  $City       = $_POST['city'];
  $CareerGoal = $_POST['career_goal'];

  $num_check  = strlen($Phone);

  // 1. Check for blank fields on vital contact criteria
  if($Name == '' || $Email == '' || $Phone == '' || $Country == '' || $City == '')
  {
      $error = 'All primary contact details are required to reserve your seat.';
      include('index.php');
      exit;
  }

  // 2. Validate email structure safely
  if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $error = 'Please enter a valid email address structure.';
      include('index.php');
      exit;
  }

  // 3. GSM Number evaluation (Matches Nigerian 11-digit mobile strings)
  if($num_check != 11)
  {
      $error = 'Enter a valid 11-digit GSM phone number.';
      include('index.php'); 
      exit;
  }

  // 4. Constructing Mail Targets & Body Content
  $to = "abdsalamhamad3@gmail.com";
  $mail_sub = "New Tech After 35 Masterclass Registration";
  $from = "From: Aledoy Academy <no-reply@alphathelma.com>\r\n";
  $from .= "Reply-To: ".$Email."\r\n";
  $from .= "Content-Type: text/plain; charset=UTF-8\r\n";

  $body = "Below is the information that was filled out:\n"
        . "Name: " . $Name . "\n"
        . "Email: " . $Email . "\n"
        . "Phone: " . $Phone . "\n"
        . "Age Range: " . $AgeRange . "\n"
        . "Location: " . $City . ", " . $Country . "\n"
        . "Primary Career Goal: " . $CareerGoal . "\n"
        . "******************************************\n\n"; 

  // Send the notification email
  @mail($to, $mail_sub, $body, $from);

  // 5. Appending and saving backup log details locally inside data.txt
  $file = fopen('data.txt', 'a');
  if($file) {
      fwrite($file, $body);
      fclose($file);
  }

  // Success Confirmation Notification
  $success = 'Your seat has been reserved successfully! Check your email for access instructions.';
  include('index.php');
  exit;
?>