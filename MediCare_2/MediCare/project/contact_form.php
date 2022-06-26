<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link rel="stylesheet" href="formstyle.css">
</head>
<body>
<?php
$servername ='localhost';
$user = 'root';
$pass = '';
$db = 'medicare';

$conn = mysqli_connect($servername, $user, $pass, $db);

 
?>

<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form">
  Please provide the necessary information!<br><br> 
  <input type='hidden' name='Department_Id' value='<?php echo $_GET["Department_Id"]; ?>'/>
  <input type='hidden' name='Doctor_Name' value='<?php echo $_GET["Doctor_Name"]; ?>'/>
  
  Name: 
  <input type="text" name="fname" required><br><br>
  Email: 
  <input type="email" name="email" required><br><br>
  Phone No:
  <input type="number" name="phoneno" required><br><br>
  Select Date and Time:
  <input type="datetime-local" name="date_time" required><br><br>
  

  <button name="save" id="btnid">Book Appointment</button>
</form>

<script>
        document.getElementById("btnid").addEventListener("click", Validate);
        function Validate() {
            var emailval = document.getElementById("eid").value;
            var emailpat = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
            if (!emailval.match(emailpat))
                alert("Email is not valid");
        }
    </script>
</div>



<?php
// php query to insert the data into the table
?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="medicare";

	// Create connection	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

  
  if(isset($_POST['save']))
{
  
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $phoneno =$_POST['phoneno'];
  $date_time=$_POST['date_time'];
  $Department_Id=$_POST['Department_Id'];
  $Doctor_Name=$_POST['Doctor_Name'];
  $insert = "INSERT INTO appointment_form (fname, email, phoneno, date_time, Department_Id, Doctor_Name) VALUES ('$fname', '$email', '$phoneno', '$date_time', '$Department_Id','$Doctor_Name')";
  
  //echo $sql;
  if ($conn->query($insert) === TRUE) {
    echo "<script>window.alert('Appointment Booked Successfully');
        window.location.href='index.php';</script>";
    
  }
    else {
    echo '<script>alert("Error inserting data")</script>';
  }
	
}
	$conn->close();
?>
</body>

</html>