<?php include('menu.php'); ?>
<div class="main content">
    <div class=wrapper>
        <h1>Add User</h1>
        </br></br>
        <div>
            <form action=" " method=POST id="doctorform">
            Doctor Name: 
            <input type="text" name="Doctor_Name" required><br><br>
            Specification:
            <input type="text" name="Specification" required><br><br>
            Department Id :
            <input type="int" name="Department_Id" required><br><br>
            Select Image:
            <input type="file" name="Doc_Image" required><br><br>
            <button class="updatebtn" name="ADD" value="submit">Add</button>
            </form>
        </div>

    </div>
    <br><br>
    <?php include('footer.php'); ?>

    <?php
    if (isset($_POST['ADD'])) {
        $Doctor_Name = $_POST['Doctor_Name'];
        $Specification = $_POST['Specification'];
        $Doc_Image = $_POST['Doc_Image'];
        $Department_Id = $_POST['Department_Id'];
        $insert = "INSERT INTO tbl_doctor(Doctor_Name, Specification, Doc_Image, Department_Id) VALUES ('$Doctor_Name', '$Specification', '$Doc_Image', '$Department_Id')";

        if ($conn->query($insert) == TRUE) {
            echo "<script>window.alert('New Doctor added Successfully');
					window.location.href='Doctors.php';</script>";
        } else {
            echo "<script>Error: " . $insert . "<br>" . $conn->error."</script>";
        }
    }
    $conn->close();
    ?>