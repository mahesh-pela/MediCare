<?php include('../php/constants.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MediCare Login </title>
    <link rel="stylesheet" href="../php/login_form.css">
</head>

<body>
    <form action="" method="POST" class="login_form">
        <div class="imgcontainer">
            <img src="avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        <?php
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            
            if(isset($_SESSION['no-login-message'])){
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
            ?>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br>
           
            <button type="submit" name="submit">Login</button>
        </div>
    </form>
</body>
</html>

    
    <?php
        if(isset($_POST['submit'])){
            //get the data from login form
           echo $username =$_POST['username'];
           echo $password =$_POST['password'];
            
           //sql to check whether the username exists or not
           $sql = "SELECT * from tbl_admin where username='$username' AND password='$password'";
           
           $res = mysqli_query($conn, $sql);

           //count rows to check whether the user exists or not
           $count = mysqli_num_rows($res);
           if($count == 1){
               //user login
               $_SESSION['login'] ="<div class='sucess'> Login Successfully</div>";
               $_SESSION['user'] =$username; //checks whether the user is logged in or not
               header('location:'.SITEURL.'php/index.php');
           }
           else{
               $_SESSION['login']="<div class='error text-center'>Username and Password do not match</div>";
               header('location:'.SITEURL.'php/login.php');
           }

        }
    ?>
