<?php
$to = "info@GloRoll.com";
$from = "no-reply@GloRoll.com";

$headers = "From: " . $from . "\r\n";

$subject = "GloRoll.com New subscription";
$body = "New user subscription: " . $_POST['email'];


if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{ 
    if (mail($to, $subject, $body, $headers, "-f " . $from))
    {
        echo 'Your e-mail (' . $_POST['email'] . ') will receive any future updates!';
    }
    else
    {
       echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
    }
}
else
{
   echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
}