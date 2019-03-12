<?php
    $name = $_POST['name'];
    $user_email = $_POST['email'];
    $massage = $_POST['massage'];

    $email_from = 'ivan123dimitrov@gmail.com';
    $email_subject = "New Form Submition";
    
    $email_struct = " User name: $name.\n" . 
                        "User email: $user_email.\n" .
                        "Massage: $massage";

    $to = 'ivan123dimitrov@gmail.com';
    $headers = "Fromm: $email_from \r\n"
    $headers .= "Replay to: $user_email \r\n"

    mail($to, $email_subject, $email_struct, $headers);

    header("Location: thehebridesbar.uk");
?>