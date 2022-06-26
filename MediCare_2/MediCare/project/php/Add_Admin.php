<?php include('menu.php'); ?>
<div class="main content">
    <div class=wrapper>
        <h1>Add Admin</h1>
        </br></br>
        <div class>
            <form action=" " method=POST id="adminform">
            Username: 
            <input type="text" name="username" required><br><br>
            Password:
            <input type="password" name="password" required><br><br>
            <button class="updatebtn" name="ADD" value="submit">Add</button>
            </form>
        </div>

    </div>
    <br><br>
    <?php include('footer.php'); ?>

    <?php
    if (isset($_POST['ADD'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $insert = "INSERT INTO tbl_admin(username, password) VALUES ('$username', '$password')";

        if ($conn->query($insert) == TRUE) {
            echo "<script>window.alert('New Admin added Successfully');
					window.location.href='manage_admin.php';</script>";
        } else {
            echo "<script>Error: " . $insert . "<br>" . $conn->error."</script>";
        }
    }
    $conn->close();
    ?>