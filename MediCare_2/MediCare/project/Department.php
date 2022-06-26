<style>

.img-responsive{
  height: 270px;
  width: 450px;
border: 5px solid #ddd;
}
.img-block{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.233);
    float: left;
    margin-left: 40px;
    margin-top: 10px;
    margin-bottom: 50px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: center;
    background-color: #ddd;
    height: auto;

}
    </style>

	<body>
 
  <?php
	
	/*-- we included connection files--*/
  $host = "localhost";
  $uname = "root";
  $pwd = "";
  $db_name="medicare";
  ?>
  <?php

	$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database.");
	mysqli_select_db($result,$db_name) or die("Could not select the databse.");
	$image_query = mysqli_query($result,"select Department_Id, Department_Name, Dept_Image from tbl_department");
	while($rows = mysqli_fetch_array($image_query))
	{
    $Department_Id = $rows['Department_Id'];
		$Department_Name = $rows['Department_Name'];
		$Dept_Image = $rows['Dept_Image'];
	?>
	
	<div class="img-block">
    
	<a href="Doctors.php?Department_Id=<?php echo $Department_Id; ?>">
    <img src="<?php echo $Dept_Image; ?>" alt="" title="<?php echo $Department_Name; ?>" class="img-responsive" />
	</a>
    <p><b> <?php echo $Department_Name?> </b></p>
  </div>
	
	<?php
	}
?>


			</div>
		</div>
    <!-- 
	</body>
	</html> -->
	