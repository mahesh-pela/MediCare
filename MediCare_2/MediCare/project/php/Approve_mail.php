<?php 
include('constants.php');
?>
<?php 

?>
<?php
// $sql ="select * from tbl_appointment ";


    $to = "pelamahesh47@gmail.com";
    $subject = "Appointment Approved";
    
    $message ="<p><b> Congratulations your appointment has been approved. You are requested
    to visit the clinic at the respected time. <br><br> Thank you for contacting us..
    </p>" ;
 
    $header = "From:immp3353@gmail.com \r\n";
//  $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $retval = mail ($to,$subject,$message,$header);
    
    if( $retval == true ) {
        header('location:'. SITEURL.'php/appointment.php');
    }
    else {
        header('location:'.SITEURL. 'php/appointment.php');
    }
?>