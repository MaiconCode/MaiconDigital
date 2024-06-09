<?php 

    $to = 'maicondigital900@gmail.com';
    $email = $_POST['email'];
    $subject = $_POST['assunto'];
    $message = $_POST['texto'];
    $headers = "from: $email" . "\r\n" . "Reply-to: $email";
  
    mail($to, $subject, $message, $headers);
    header('Location: index.php');

?>