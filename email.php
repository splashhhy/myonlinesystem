<?php
$to = 'jassithembiso@gmail.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: jassithembiso@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
 echo "SUCCESS";
} else {
 echo "ERROR";
}

?>