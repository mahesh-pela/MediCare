<html>
<style>
  .formn{
  padding: 50px;
  width: 500px;
  border-radius: 3%;
  background-color:rgba(175, 159, 159, 0.918);
  color: black;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  text-align: center;
}

.feedback{
  padding-left: 35%;
  padding-top: 50px;
  width: 30%;
  align-content: center;
}

textarea{
  resize: none;
}

</style>
<body>
<div class="feedback">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="formn">
  
  Name: 
  <input type="text" name="fname"><br><br>
  Email: 
  <input type="text" name="Email"><br><br>
  Rating:<br>
  <input type="radio" id="1" name="Rating" value="1">
<label for="1">Poor</label><br>
<input type="radio" id="2" name="Rating" value="2">
<label for="2">Average</label><br>
<input type="radio" id="3" name="Rating" value="3">
<label for="3">Awesome</label><br><br>
  
  Tell us your experience :
  <textarea rows="4" cols="50" name="Experience">
  </textarea>
  <button name="save" class="button-29" >Submit</button>
</form>
</div>
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
  $Email=$_POST['Email'];
  $Rating =$_POST['Rating'];
  $Experience=$_POST['Experience'];
  $insert = "INSERT INTO feedback_form (fname, Email, Rating, Experience) VALUES ('$fname', '$Email', '$Rating', '$Experience')";
  
  //echo $sql;
  if ($conn->query($insert) === TRUE) {
    echo "<script>window.alert('Feedback Submitted Successfully');
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