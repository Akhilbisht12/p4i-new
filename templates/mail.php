<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$option = $_POST['formOption'];
$to = "deepaksemwal121@gmail.com";
$subject = "Mail From P4i Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone ."\r\n Vistor Type=" . $option . "\r\n Message =" . $message;
$headers = "From: admin@upgrate.in" . "\r\n" .
"CC: [email protected]";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    echo("submitted successfully");
}
//redirect
header("Location:index.php");
?>