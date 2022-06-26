<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Doctor Images</title>
	<style>
		body {
			background-color: #f2f2f2;
			color: #333;
		}

		.main {
			box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
			margin-top: 10px;
		}

		h3 {
			background-color: wheat;
			color: blueviolet;
			padding: 15px;
			border-radius: 4px;
			box-shadow: 0 1px 6px rgba(57, 73, 76, 0.35);
			font-weight: bold;
		}

		.img-box {
			margin-top: 20px;
		}

		.img-block {
			float: left;
			margin-right: 5px;
			text-align: center;
		}

		p {
			margin-top: 0;
		}

		img {
			width: 375px;
			min-height: 250px;
			margin-bottom: 10px;
			box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
			border: 6px solid #f7f7f7;
		}
	</style>

</head>

<body>
	<!-------------------Main Content------------------------------>
	<div class="container main">
		<h3>Choose Your Preferred Doctor</h3>
		<div class="img-box">

			<?php

			/*-- we included connection files--*/
			$host = "localhost";
			$uname = "root";
			$pwd = "";
			$db_name = "medicare";
			?>


			<?php
			$depid = $_GET['Department_Id'];
			$result = mysqli_connect($host, $uname, $pwd) or die("Could not connect to database.");
			mysqli_select_db($result, $db_name) or die("Could not select the databse.");
			$image_query = mysqli_query($result, "select Doctor_Name, Doc_Image, Specification from tbl_doctor where Department_Id=$depid");
			// $Department_Name=$_GET['Department_Name'];
			while ($rows = mysqli_fetch_array($image_query)) {
				$Doctor_Name = $rows['Doctor_Name'];
				$Specification = $rows['Specification'];
				$Doc_Image = $rows['Doc_Image'];
			?>
				<?php

				?>
				<div class="img-block">
					<img src="<?php echo $Doc_Image; ?>" alt="" title="<?php echo $Doctor_Name; ?>" title="<?php echo $Specification; ?>" class="img-responsive" />
					<p><b> <?php echo $Doctor_Name . "<br>" . $Specification ?></b> </p>
					<a href="contact_form.php?Department_Id=<?php echo $_GET['Department_Id']; ?>&Doctor_Name=<?php echo $Doctor_Name; ?>">
						<button value="submit"> Book Appointment</button>

					</a>


				</div>




			<?php
			}
			?>
		</div>
	</div>
</body>

</html>