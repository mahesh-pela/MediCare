<?php
 include '../php/constants.php';
//get the id of the doctor to be deleted
$Doctor_Id = $_GET['Doctor_Id'];

$sql = "DELETE from tbl_doctor where Doctor_Id=$Doctor_Id";

//execute the query
$res = mysqli_query($conn, $sql);

//checkk whether the query is executed successfully or not
if($res == true){
    header('location:'. SITEURL.'php/Doctors.php');
    
}

else{
    header('location:'.SITEURL. 'php/Doctors.php');
}
?>