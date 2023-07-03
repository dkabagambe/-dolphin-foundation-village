<?php
if(isset($_POST['submit'])){
    $to = 'info@dolphinfoundationvillage.org'; // Updated email address to receive the email
    $from = $_POST['email']; // This is the sender's Email address
 
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $age = $_POST['age'];
    $newDate = date('Y-m-d');
 
    $telephone = $_POST['telephone'];
    $telephon = $_POST['telephon'];
  
    $subject = 'Form submission';
    $message = $first_name . ' ' . $last_name . ' expressed interest on ' . $newDate . ' regarding fostering a child aged between ' . $_POST['adopt'] . ' months. ' . $last_name . ' is from ' . $_POST['address'] . ' and is ' . $_POST['age'] . ' years old. Their marital status is ' . $_POST['marital'] . '. Their email addresses are ' . $_POST['email'] . ' and ' . $_POST['email1'] . '. Their telephone numbers are ' . $telephone . ' and ' . $telephon . '. Their motivation to adopt is: ' . $_POST['subject1'] . '. They learned about adoption in Uganda from: ' . $_POST['subject2'] . '. Additional comments: ' . $_POST['subject3'];

    $headers = 'From:' . $from;
    mail($to, $subject, $message, $headers);
    echo 'Mail Sent. Thank you for showing interest in Dolphin, ' . $first_name . '. We will contact you shortly.';
    header('Location: index.html'); // Redirect to index.html
    exit();
}
?>
