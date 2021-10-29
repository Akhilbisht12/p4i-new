<?php
//get data from form  

$name = $_POST['fullname'];
$email=  filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$phone= $_POST['phone'];
$message= $_POST['message'];
$option = $_POST['formOption'];
$to = "deepaksemwal121@gmail.com";
$subject = "Mail From P4i Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone ."\r\n Vistor Type=" . $option . "\r\n Message =" . $message;
$headers = "From: admin@upgrate.in" . "\r\n" .
"CC: [email protected]";
if($email!=NULL){
    session_start();
    mail($to,$subject,$txt,$headers);
    $_SESSION['success_message'] = "Your form saved successfully.";
    header("Location: thanks.php");
    exit();
}
else {
    echo "Server problem, Try after sometime.";
    header("Location: index.php");
}

?>
