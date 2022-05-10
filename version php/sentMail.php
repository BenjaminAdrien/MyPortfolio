<?php
$success = '';
$failed = '';
// echo "<script type= 'text/javascript'>
// const sectionsPhp = document.querySelectorAll('.section');
// const sectBtnPhp = document.querySelectorAll('.control');
// function ContactOnMail() {
//   sectionsPhp.forEach((section) => {
//     section.classList.remove('active')
//   })
//   document.getElementById('contact').classList.add('active');
//   sectBtnPhp.forEach((btn) => {
//     btn.classList.remove('active-btn')
//   })
//   sectBtnPhp[4].className += ' active-btn';
// }
// </script>";

if (isset($_POST['submit'])) {
  $mailto = "benadrien314@gmail.com";  //My email address
  //getting customer data
  $name = $_POST['name']; //getting customer name
  $fromEmail = $_POST['email']; //getting customer email
  $subject = $_POST['subject']; //getting subject line from client
  $subject2 = "Confirmation: Votre Message a bien été envoyé - Benjamin ADRIEN"; // For customer confirmation

  //Email body I will receive
  $message = "Cleint Name: " . $name . "\n"
    . "Client Message: " . "\n" . $_POST['message'];

  //Message for client confirmation
  $message2 = "Bonjour " . $name . "\n"
    . "J'ai bien reçu votre mail et je vous remercie d'être passé sur mon Portfolio!" . "\n\n"
    . "Vous avez envoyé le message suivant: " . "\n" . $_POST['message'] . "\n\n"
    . "Cordialement," . "\n" . "Benjamin ADRIEN";

  //Email headers
  $headers = "From: " . $fromEmail; // Client email, I will receive
  $headers2 = "From: " . $mailto; // This will receive client

  //PHP mailer function

  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client

  //Checking if Mails sent successfully

  if ($result1 && $result2) {
    $success = "Votre Message a été envoyé avec Succès!";
    // echo '<script type="text/javascript">
    // ContactOnMail();
    // </script>';
  } else {
    $failed = "Désolé! Le Message n'a pas pu être envoyé, Réessayez plus tard.";
  }
}
