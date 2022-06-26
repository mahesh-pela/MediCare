<?php include('menu.php')?>
<div class="main-content">
    <div class="wrapper">
        <h1> Update Admin</h1>
        <br><br>

        <?php
        $Id =$_GET['Id'];
        $update ="SELECT * FROM tbl_admin where Id=$Id";

        //execute the query
        $res = mysqli_query($conn, $update);

        //check whether the query is executed or not
        if($res ==true){
            $count = mysqli_num_rows($res);
            if($count==1){
                $row = mysqli_fetch_assoc($res);
                $Id =$row['Id'];
                $username =$row['username'];
                $password =$row['password'];
            }
            else{
                header('location:'.SITEURL.'php/manage_admin.php');
            }
        }
        ?>

    
        <div>
            <form action=" " method=POST id="adminform">
            Id:
            <input type="int" name="Id" value="<?php echo $Id; ?>" required><br><br>
            Username: 
            <input type="text" name="username" value="<?php echo $username; ?>" required><br><br>
            Password:
            <input type="password" name="password" value="<?php echo $password; ?>" required><br><br>
            <button class="updatebtn" name="update" value="submit">Update</button>
            </form>
        </div>
    </div>
</div>

<?php
    //check whether the submit button is clicked or not
    if(isset($_POST['update'])){
        //get all the values from form to update
        $Id = $_POST['Id'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "UPDATE tbl_admin set
        username = '$username',
        password = '$password'
        where Id = '$Id'
        ";

        //execute the query
        $res = mysqli_query($conn, $sql);

        //checking whether the query is executed successfully or not
        if($res == true){
            header('location:'.SITEURL.'php/manage_admin.php');
        }

        else{
            header('location:'.SITEURL.'php/manage_admin.php');
        }
    }

?>
<?php include('footer.php'); ?>