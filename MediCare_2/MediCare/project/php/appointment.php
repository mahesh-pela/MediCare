<style>
    .main {
        overflow: scroll;
    }

    #approvebtn {
        background-color: blue;
        color: white;
        margin: 5px;
        width: 70px;
        height: 25px;
    }

    #approvebtn:hover {
        background-color: #4CAF50;
        color: white;
    }

    #cancelbtn {
        background-color: blue;
        color: white;
        margin: 5px;
        width: 70px;
        height: 25px;
    }

    #cancelbtn:hover {
        background-color: #4CAF50;
        color: white;
    }
</style>
<?php include('menu.php') ?>

<div class="main">
    <div class="wrapper">
        <h1>Appointment List</h1>
        <br><br>
        </br>
        <style>
            .tblfull {
                width: 100%;
                padding-right: 0px;
            }
        </style>
        <table class="tblfull">
            <tr>
                <th>Id&nbsp;&nbsp;</th>
                <th>Patient Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Date Time</th>
                <th>Doctor Name</th>
                <th>Department Id</th>
                <th>Status</th>
            </tr>
            <?php
            $sql = "SELECT * FROM appointment_form";
            $res = mysqli_query($conn, $sql);
            if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                $ad_id = 1;
                if ($count > 0) {
                    while ($fetch = mysqli_fetch_assoc($res)) {
                        $Id = $fetch['Id'];
                        $fullname = $fetch['fname'];
                        $email = $fetch['email'];
                        $phoneno = $fetch['phoneno'];
                        $date_time = $fetch['date_time'];
                        $Doctor_Name = $fetch['Doctor_Name'];
                        $Department_Id = $fetch['Department_Id'];
                        $status=$fetch['status'];

            ?>
                        <tr>
                            <td><?php echo $Id ?></td>
                            <td><?php echo $fullname ?></td>
                            <td><?php echo $email ?> </td>
                            <td><?php echo $phoneno ?> </td>
                            <td><?php echo $date_time ?> </td>
                            <td><?php echo $Doctor_Name ?> </td>
                            <td><?php echo $Department_Id ?> </td>
                            <td Id="status<?=$Id?>">
                            <?php
                                if($status == 'cancel' or $status == ''){
                                    ?>
                                    <a href="<?php echo SITEURL; ?>php/Approve_mail.php?email=<?php echo $email;?>">
                                        <form action='Approve_mail.php' method='get'>
                                            <button type="button" onclick="change_status(<?=$Id?>)" style="color: green;" value="approve"> Approve</button>
                                        </form>
                                    </a>
                                    <?php
                                }else{
                                    ?>
                                    <a href="<?php echo SITEURL; ?>php/Reject_mail.php?email=<?php echo $email;?>">
                                    <form action="Reject_mail.php" method="get">
                                        <button type="button" onclick="change_status(<?=$Id?>)" style="color: red;" value="cancel"> Cancel</button>
                                    </form>
                                    </a>
                                    <?php
                                }
                                ?>
                            
                                
                            </td>
                        </tr>

                        
            <?php
                    }
                }
            }
            ?>

        </table>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
                        function change_status(Id){
                            $.ajax({
                                type:"post",
                                url:"status.php",
                                data: {Id:Id},
                                success:function(data){
                                    $("#status"+ Id).html(data);
                                }
                            })
                        }
        </script>

    </div>
</div>