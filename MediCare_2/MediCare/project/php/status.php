
<?php
// $sql ="select * from tbl_appointment ";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare";

// Create connection	
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$Id = $_REQUEST['Id'];
$sql = mysqli_query($conn, "SELECT * from appointment_form where Id= '$Id'");
$fetch = mysqli_fetch_array($sql);

if($fetch['status'] =='approve'){
    $update =mysqli_query($conn, "Update appointment_form set status='cancel' where Id='$Id'");
    ?>
    <button type="button" onclick="change_status(<?=$Id?>)" style="color: red;"> Cancel</button>
    <?php
}
else{
    $update =mysqli_query($conn, "Update appointment_form set status='approve' where Id='$Id'");
    ?>
    <button type="button" onclick="change_status(<?=$Id?>)" style="color: green;"> Approve</button>
    <?php
}

?>
