<?php 
if(isset($_POST['submit'])){
    $to = 'info@dolphinfoundationvillage.org'; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = 'Form submission';
    $subject2 = 'Copy of your form submission';
    $message = $first_name . ' ' . $last_name . ' wrote the following:' .  $_POST['message'];
    $message2 = 'Here is a copy of your message ' . $first_name .  $_POST['message'];

    $headers = 'From:' . $from;
    $headers2 = 'From:' . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo 'Mail Sent. Thank you ' . $first_name . ', we will contact you shortly.';
       ('Location: index.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>