 <?php
$to_email = "eaglewingshealthcare28@gmail.com";
$subject = "Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: Divya Bajaj";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email sent successfully to $to_email...";
} else {
    echo "Email sending failed...";
}
?>