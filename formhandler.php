<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$location = $_POST['location']
$number = $_POST['number']
$message= $_POST['message']


$email_from ='susannsno6@gmail.com'
$email_subject= 'New Form Submission'
$email_body="User Name: $name.\n".
"User email: $vistor_email.\n".
"location: $location.\n".
"number: $number.\n".
"message: $meassage.\n".;
$to='shakyasusan5@gmail.com'
$headers= "From $email_from \r\n"; 
$headers .= "From $email_from \r\n"; 
mail($to,$email_subject,$email_body,$email_headers)