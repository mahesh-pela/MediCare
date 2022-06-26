<?php include ('menu.php') ?>
    
<div class= "main">
<div class= "wrapper">
    <h1>Admin</h1>
   
    <br><br>
</br>
    <a href="Add_Admin.php" class="primarybtn">Add Admin</a>
</br></br>


<table class="tblfull">
    <tr> 
		<th>Id</th>
		<th>Username</th>
		<th>Password</th>
		<th>Action</th>
    </tr>
    <?php 
    $sql="SELECT * FROM tbl_admin";
    $res=mysqli_query($conn,$sql);
    if($res==TRUE){
        $count = mysqli_num_rows($res);
        $ad_id=1;
        if($count>0){
            while($rows=mysqli_fetch_assoc($res)){
				$Id=$rows['Id'];
				$username=$rows['username'];
				$password=$rows['password'];
            ?>
        <tr> 
        <td><?php echo $Id ?></td>
        <td><?php echo $username?> </td>
        <td><?php echo $password ?> </td>
        <td> 
            <a href="<?php echo SITEURL; ?>php/Update_Admin.php?Id=<?php echo $Id; ?>" class="updatebtn">Update</a>
            <a href="<?php echo SITEURL; ?>php/Delete_Admin.php?Id=<?php echo $Id; ?>" class="deletebtn">Delete</a>
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
