<style>
    .main{
        overflow: scroll;
    }
</style>
<?php include ('menu.php') ?>
    
<div class= "main">
<div class= "wrapper">
    <h1>Doctor List</h1>
   
    <br><br>
</br>
    <a href="AddDoctors.php" class="primarybtn">Add Doctors</a>
</br></br>


<table class="tblfull">
    <tr> 
		<th>Doctor Id</th>
		<th>Doctor Name</th>
		<th>Specification</th>
		<th> Doctor Image</th>
		<th>Department Id</th>
		<th>Action</th>
    </tr>
    <?php 
    $sql="SELECT * FROM tbl_doctor";
    $res=mysqli_query($conn,$sql);
    if($res==TRUE){
        $count = mysqli_num_rows($res);
        $ad_id=1;
        if($count>0){
            while($rows=mysqli_fetch_assoc($res)){
				$Doctor_Id=$rows['Doctor_Id'];
				$Doctor_Name=$rows['Doctor_Name'];
				$Specification=$rows['Specification'];
				$Doctor_Image=$rows['Doc_Image'];
				$Department_Id=$rows['Department_Id'];
            ?>
        <tr> 
        <td><?php echo $Doctor_Id ?></td>
        <td><?php echo $Doctor_Name?> </td>
        <td><?php echo $Specification ?> </td>
        <td><?php echo $Doctor_Image ?> </td>
        <td><?php echo $Department_Id ?> </td>
        
        <td> 
            <a href="<?php echo SITEURL; ?>php/UpdateDoctors.php?Doctor_Id=<?php echo $Doctor_Id;?>" class="updatebtn">Update</a>
            <a href="<?php echo SITEURL; ?>php/DeleteDoctors.php?Doctor_Id=<?php echo $Doctor_Id; ?>" class="deletebtn">Delete</a>
		 </td>
    	</tr>
            <?php
            }

        }

    }
    ?>
   
</table>

</div>
</div> 