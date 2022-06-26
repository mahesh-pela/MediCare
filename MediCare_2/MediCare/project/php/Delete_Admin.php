<?php
include '../php/constants.php';
//get the id of the doctor to be deleted
$Id = $_GET['Id'];

$sql = "DELETE from tbl_admin where Id=$Id";

//execute the query
$res = mysqli_query($conn, $sql);

//checkk whether the query is executed successfully or not
if($res == true){
    header('location:'. SITEURL.'php/manage_admin.php');
    
}
else{
    header('location:'.SITEURL. 'php/manage_admin.php');
}
?>