<?php 

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $to = $_POST['email'];
    $subject = $_POST['assunto'];
    $message = $_POST['texto'];
    // $headers = 'from: exemplo@exemplo@gmail.com' . '\r\n' . 'Reply-to: exemplo@exemplo.com';
    $headers = 'from: ' . $_POST['email'] . '\r\n' . 'Reply-to: ' . $_POST['email'];


    mail($to, $subject, $message, $headers);

    header('Location: index.php');

?>