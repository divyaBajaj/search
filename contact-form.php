<?php

$name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'eaglewingshealthcare28@gmail.com';

	$email_subject = "New Feedback submission";

	$email_body = "Hi,\nYou have received a new feedback from User: $name $last_name\nPhone number: $phone\nEmail: $visitor_email\n".
                            "Feedback: $message\n".

                            $to = "eaglewingshealthcare28@gmail.com";

                            $headers = "From: $email_from \r\n";
                          
                            $headers .= "Reply-To: $visitor_email \r\n";
                          
                            mail($to,$email_subject,$email_body,$headers);
                            header('Location: contact.html');

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

?>