<?php
$Name= $_POST['name'];
$Email= $_POST['email'];
$Number= $_POST['phone'];
$Message= $_POST['message'];
$to = "sukret916@gmail.com";
$subject = "Mail from test site";

$text = "Name =".$name. "\r\nEmail =".$email."\r\nNumber =".$Number."\r\nMessage =".$Message;
$headers = "From: noreply@sks.com";
if($email!=NULL)
{
	mail($to, $subject, $text , $Message);
}
?>