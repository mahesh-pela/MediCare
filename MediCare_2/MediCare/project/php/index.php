<style>
    

    h1{
        margin-bottom: 15px;
        color: blue;
    }

    h4{
        margin: 5px;
    }
</style>
<?php include('menu.php')?>
<div>
    <br>
<?php
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
        }
        ?>
</div>


<div class= "main">
<div class= "wrapper">
    <h1>Dashboard</h1>
    <div class="col4 text-center">
        <h4>Total Doctors</h4>
        <?php
                
                $query = "SELECT Doctor_Id FROM tbl_doctor ORDER BY Doctor_Id";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h1>'.$row.'</h1>';
                    ?>
    </div>


    <div class="col4 text-center">
        <h4>Total Appointments</h4>
        <?php
                
                $query = "SELECT Id FROM appointment_form ORDER BY Id";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h1>'.$row.'</h1>';
                    ?>
    </div>
       

       <div class="col4 text-center">
        <h4>Total Departments</h4>
        <?php
                
                $query = "SELECT Department_Id FROM tbl_department ORDER BY Department_Id";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h1>'.$row.'</h1>';
                    ?>
       </div>


       <div class="col4 text-center">
        <h4>Total Admin</h4>
        <?php
                
                $query = "SELECT Id FROM tbl_admin ORDER BY Id";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h1> '.$row.'</h1>';
                    ?>
       </div>
       <div class="clearfix"></div>
</div>
</div>

<?php include('footer.php')?>