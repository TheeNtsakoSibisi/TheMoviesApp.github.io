<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['linkedin'])   ||
   empty($_POST['facebook'])   ||
   empty($_POST['twitter'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$linkedin = strip_tags(htmlspecialchars($_POST['linkedin']));
$facebook = strip_tags(htmlspecialchars($_POST['facebook']));
$twitter = strip_tags(htmlspecialchars($_POST['twitter']));
   
// Create the email and send the message
$to = 'ntsakos155@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Movie List Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nLinkedIn:\n$linkedin\n\nFacebook:\n$facebook\n\nTwitter:\n$twitter";
$headers = "From: no-reply@ntsako.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
