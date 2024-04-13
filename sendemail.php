<?php
if(isset($_POST['to']) && isset($_POST['subject']) && isset($_POST['message'])){
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Your Name <hm1152278@gmail.com>' . "\r\n";

    if(mail($to, $subject, $message, $headers)){
        echo "Email sent successfully!";
    }else{
        echo "Failed to send email. Please try again.";
    }
}else{
    echo "Invalid input. Please fill all the fields.";
}
?>