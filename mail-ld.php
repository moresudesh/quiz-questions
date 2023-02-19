
<?php
//get data from form  
$name = $_POST['name'];
$designation= $_POST['designation'];
$location= $_POST['location'];
$email= $_POST['email'];
$mobile = $_POST['mobile'];
$company= $_POST['company'];



$to = "moresudesh2@gmail.com";
$subject = "Mail From website";

$txt ="Name = ". $name . "\r\n  
Designation = " . $designation . "\r\n 
Location = " . $location . "\r\n 
Email = " . $email . "\r\n 
Mobile = " . $mobile . "\r\n 
Message =" . $company;


$headers = "From: noreply@urologistmumbai.com" . "\r\n" .
"CC: noreply@urologistmumbai.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank-you.html");
?>
