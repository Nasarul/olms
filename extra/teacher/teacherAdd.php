<?php include('connect.php'); ?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add Teacher Information</title>

</head>

<body style="width:600px; margin:0 auto; padding:0; background-color: #d6beed; ">

    <form action="teacherAdd.php" method="post" style="margin-left:100px;" enctype="multipart/form-data">
        <p style="font-size:36px; color:#03F;">Add Teachers Informations</p>
        <table>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="tec_name" style="width:300px;" /></td>
            </tr>

            <tr>
                <td>Designation :</td>
                <td><input type="text" name="tec_designation" style="width:300px;" /></td>
            </tr>

            <tr>
                <td>Organization :</td>
                <td><input type="text" name="tec_organization" style="width:300px;" /></td>
            </tr>

            <tr>
                <td>E-mail :</td>
                <td><input type="text" name="tec_email" style="width:300px;" /></td>
            </tr>

            <tr>
                <td>Mobile :</td>
                <td><input type="text" name="tec_mobile" style="width:300px;" /></td>
            </tr>

            <tr>
                <td></td>
                <td> <br /><button type="submit" name="submit">Add</button></td>
            </tr>
        </table>

    </form>

    <?php

    if (isset($_POST['submit'])) {

        $current_date = date('F d,Y');
        $name = $_POST['tec_name'];
        $designation = $_POST['tec_designation'];
        $organization = $_POST['tec_organization'];
        $email = $_POST['tec_email'];
        $mobile = $_POST['tec_mobile'];
        //$post_file= $_FILES['image']['name'];
        //$file_tmp= $_FILES['image']['tmp_name'];
        //$post_file=date("F_d_Y_h_i_sa").$_FILES['image']['name'];

        //move_uploaded_file($file_tmp,"image/$post_file");
        $q = "INSERT INTO `tblteacher` (`tec_name`, `tec_designation`, `tec_organization`, `tec_email`, `tec_mobile`) VALUES ('$name','$designation','$organization','$email','$mobile')";
        mysqli_query($db, $q);
        if ($q != '') {
            echo "<script>alert('Your information update successfuly')</script>";
            echo "<script>window.open('teacherAdd.php','_self')</script>";
        }
    }
    ?>
</body>

</html>