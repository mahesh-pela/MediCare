<?php include('menu.php'); ?>
<div class="main content">
    <div class=wrapper>
        <h1>Add Department</h1>
        </br></br>
        <div class>
            <form action=" " method=POST id="departmentform">
            Department Name: 
            <input type="text" name="Department_Name" required><br><br>
            Select Image:
            <input type="file" name="Dept_Image" required><br><br>
            <button class="updatebtn" name="ADD" value="submit">Add</button>
            </form>
        </div>

    </div>
    <br><br>
    <?php include('footer.php'); ?>

    <?php
    if (isset($_POST['ADD'])) {
        $Department_Id = $_POST['Department_Id'];
        $Department_Name = $_POST['Department_Name'];
        $Dept_Image = $_POST['Dept_Image'];
        $insert = "INSERT INTO tbl_department(Department_Name, Dept_Image) VALUES ('$Department_Name', '$Dept_Image')";

        if ($conn->query($insert) == TRUE) {
            echo "<script>window.alert('New Department added Successfully');
					window.location.href='Department.php';</script>";
        } else {
            echo "<script>Error: " . $insert . "<br>" . $conn->error."</script>";
        }
    }
    $conn->close();
    ?>