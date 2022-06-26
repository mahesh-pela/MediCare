<?php include('menu.php')?>
<div class="main-content">
    <div class="wrapper">
        <h1> Update Doctors</h1>
        <br><br>

        <?php
        $Doctor_Id =$_GET['Doctor_Id'];
        $update ="SELECT * FROM tbl_doctor where Doctor_Id=$Doctor_Id";

        //execute the query
        $res = mysqli_query($conn, $update);

        //check whether the query is executed or not
        if($res ==true){
            $count = mysqli_num_rows($res);
            if($count==1){
                $row = mysqli_fetch_assoc($res);
                $Doctor_Id =$row['Doctor_Id'];
                $Doctor_Name =$row['Doctor_Name'];
                $Specification =$row['Specification'];
                $Doc_Image =$row['Doc_Image'];
                $Department_Id =$row['Department_Id'];
            }
            else{
                header('location:'.SITEURL.'php/Doctors.php');
            }
        }
        ?>

    
        <div>
            <form action=" " method=POST id="doctorform">
            Doctor Id:
            <input type="int" name="Doctor_Id" value="<?php echo $Doctor_Id; ?>" required><br><br>
            Doctor Name: 
            <input type="text" name="Doctor_Name" value="<?php echo $Doctor_Name; ?>" required><br><br>
            Specification:
            <input type="text" name="Specification" value="<?php echo $Specification; ?>" required><br><br>
            Department Id :
            <input type="text" name="Department_Id" value="<?php echo $Department_Id; ?>" required><br><br>
            Select Image:
            <input type="file" name="Doc_Image" value="<?php echo $Doc_Image; ?>" required><br><br>
            <button class="updatebtn" name="update" value="submit">Update</button>
            </form>
        </div>
    </div>
</div>

<?php
    //check whether the submit button is clicked or not
    if(isset($_POST['update'])){
        //get all the values from form to update
        $Doctor_Id = $_POST['Doctor_Id'];
        $Doctor_Name = $_POST['Doctor_Name'];
        $Specification = $_POST['Specification'];
        $Department_Id = $_POST['Department_Id'];
        $Doc_Image = $_POST['Doc_Image'];


        $sql = "UPDATE tbl_doctor set
        Doctor_Name = '$Doctor_Name',
        Specification = '$Specification',
        Department_Id = '$Department_Id',
        Doc_Image = '$Doc_Image'
        where Doctor_Id = '$Doctor_Id'
        ";

        //execute the query
        $res = mysqli_query($conn, $sql);

        //checking whether the query is executed successfully or not
        if($res == true){
            header('location:'.SITEURL.'php/Doctors.php');
        }

        else{
            header('location:'.SITEURL.'php/Doctors.php');
        }
    }

?>
<?php include('footer.php'); ?>