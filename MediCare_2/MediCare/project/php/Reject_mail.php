<?php 
include('constants.php');
?>

<?php


    $to = $_GET['email'];
    
    $subject = "Appointment Rejected";
    
    $message ="<p><b> Sorry your appointment has been rejected. <b><br> Thank you for contacting us..
    </p>" ;
 
    $header = "From:immp3353@gmail.com \r\n";
//  $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    

    $retval = mail ($to,$subject,$message,$header);
    
    if( $retval == true ) {
        header('location:'. SITEURL.'php/appointment.php');
    }else {
        header('location:'. SITEURL.'php/appointment.php');
    }
?>
