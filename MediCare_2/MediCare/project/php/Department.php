<style>
    .main{
        overflow: scroll;
    }
</style>
<?php include ('menu.php') ?>
    
<div class= "main">
<div class= "wrapper">
    <h1>Department List</h1>
   
    <br><br>
</br>
    <a href="AddDepartment.php" class="primarybtn">Add Department</a>
</br></br>


<table class="tblfull">
    <tr> 
		<th>Department Id</th>
		<th>Department Name</th>
		<th>Image</th>
		<th>Action</th>
    </tr>
    <?php 
    $sql="SELECT * FROM tbl_department";
    $res=mysqli_query($conn,$sql);
    if($res==TRUE){
        $count = mysqli_num_rows($res);
        $ad_id=1;
        if($count>0){
            while($rows=mysqli_fetch_assoc($res)){
				$Department_Id=$rows['Department_Id'];
				$Department_Name=$rows['Department_Name'];
				$Dept_Image=$rows['Dept_Image'];
            ?>
        <tr> 
        <td><?php echo $Department_Id ?></td>
        <td><?php echo $Department_Name?> </td>
        <td><?php echo $Dept_Image ?> </td>
        <td> 
            <a href="<?php echo SITEURL; ?>php/UpdateDepartment.php?Department_Id=<?php echo $Department_Id; ?>" class="updatebtn">Update</a>
            <a href="<?php echo SITEURL; ?>php/DeleteDepartment.php?Department_Id=<?php echo $Department_Id; ?>" class="deletebtn">Delete</a>
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
