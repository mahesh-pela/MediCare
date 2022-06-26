<?php
include('../php/constants.php');
session_destroy();

header('location:'.SITEURL.'php/login.php');

?>