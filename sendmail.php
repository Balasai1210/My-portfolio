<?php
 if(isset($_POST['send']))
 {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $query = $_POST['message'];
    $email_from = $name.'<'.$email.'>';

 $to="bharmavathu1210@gmail.com";
 $subject="WEB Enquiry!";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="   

         Name:
         $name     
         <br>
         Email-Id:
         $email        
         <br>
         Message:
         $query        

   ";
    if(mail($to,$subject,$message,$headers))
        header("Location:../index.php?msg=Successful Submission! Thankyou for contacting us.");
    else
        header("Location:../index.php?msg=Error To send Email !");
        //contact:-your-email@your-domain.com
 }
?>