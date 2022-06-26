<?php
//checks whether the user is logged in or not
if(!isset($_SESSION['user']))//if user session is not set
{
    $_SESSION['no-login-message']= "<div class='error text-center'> Please Login to Acess Admin Panel</div>";
    header('location:'.SITEURL.'php/login.php');
}
?>