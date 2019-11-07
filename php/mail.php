<?php 
if(isset($_POST['submit'])){
    $to = "ahmed.barkeoui@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
	$message = $_POST['message'];
    $subject = "Internship Mail";
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message);
  //  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
   header('file:///C:/Users/BARKEOUI%20AHMED/Desktop/Portfoliou/index-2.html/');
    }
?>