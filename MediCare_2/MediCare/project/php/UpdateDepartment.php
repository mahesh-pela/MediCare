<?php include('menu.php')?>
<div class="main-content">
    <div class="wrapper">
        <h1> Update Department</h1>
        <br><br>

        <?php
        $Department_Id =$_GET['Department_Id'];
        $update ="SELECT * FROM tbl_department where Department_Id=$Department_Id";

        //execute the query
        $res = mysqli_query($conn, $update);

        //check whether the query is executed or not
        if($res ==true){
            $count = mysqli_num_rows($res);
            if($count==1){
                $row = mysqli_fetch_assoc($res);
                $Department_Id =$row['Department_Id'];
                $Department_Name =$row['Department_Name'];
                $Dept_Image =$row['Dept_Image'];
            }
            else{
                header('location:'.SITEURL.'php/Department.php');
            }
        }
        ?>

    
        <div>
            <form action=" " method=POST id="departmentform">
            Department Id:
            <input type="int" name="Department_Id" value="<?php echo $Department_Id; ?>" required><br><br>
            Department Name: 
            <input type="text" name="Department_Name" value="<?php echo $Department_Name; ?>" required><br><br>
            Select Image:
            <input type="file" name="Dept_Image" value="<?php echo $Dept_Image; ?>" required><br><br>
            <button class="updatebtn" name="update" value="submit">Update</button>
            </form>
        </div>
    </div>
</div>

<?php
    //check whether the submit button is clicked or not
    if(isset($_POST['update'])){
        //get all the values from form to update
        $Department_Id = $_POST['Department_Id'];
        $Department_Name = $_POST['Department_Name'];
        $Dept_Image = $_POST['Dept_Image'];


        $sql = "UPDATE tbl_department set
        Department_Name = '$Department_Name',
        Dept_Image = '$Dept_Image'
        where Department_Id = '$Department_Id'
        ";

        //execute the query
        $res = mysqli_query($conn, $sql);

        //checking whether the query is executed successfully or not
        if($res == true){
            header('location:'.SITEURL.'php/Department.php');
        }

        else{
            header('location:'.SITEURL.'php/Department.php');
        }
    }

?>
<?php include('footer.php'); ?>