<?php

$errors = '';
$myemail = 'stewartmetalind@gmail.com'; //<-----Put Your email address here.

$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (empty($errors)) {
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. " .
            " Here are the details:\n Name: $name \n " .
            "Email: $email_address\n " .
            "Subject: $subject\n " .
            "Message: $message\n ";
    $headers = "From: $email_address\n";
    $headers .= "Reply-To: $email_address";
    $retval = mail($to, $email_subject, $email_body, $headers);
//redirect to the 'thank you' page
    // $retval = mail($to, $subject, $message, $header);

    if ($retval == true) {
        echo "Message sent successfully...";
        header('Location: contact-us.html');
    } else {
        echo "Message could not be sent...";
    }
}
?>