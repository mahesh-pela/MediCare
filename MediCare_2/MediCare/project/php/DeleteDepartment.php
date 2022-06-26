<?php
include '../php/constants.php';
//get the id of the doctor to be deleted
$Department_Id = $_GET['Department_Id'];

$sql = "DELETE from tbl_department where Department_Id=$Department_Id";

//execute the query
$res = mysqli_query($conn, $sql);

//checkk whether the query is executed successfully or not
if($res == true){
    header('location:'. SITEURL.'php/Department.php');
    
}
else{
    header('location:'.SITEURL. 'php/Department.php');
}
?>