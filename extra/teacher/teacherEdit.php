<?php
include("connect.php");

if (isset($_GET['id'])) {
    $edit_id = $_GET['id'];
}         
$select_code = "SELECT * FROM `tblteacher` where tec_id='$edit_id'";
$run_posts = mysqli_query($db, $select_code);
$i = 1;
while ($row = mysqli_fetch_array($run_posts)) {
    $edit_id = $row['tec_id'];
    $name = $row['tec_name'];
    $designation = $row['tec_designation'];
    $organization = $row['tec_organization'];
    $email = $row['tec_email'];
    $mobile = $row['tec_mobile'];
}
?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Update Teachers' Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="width:900px; margin: auto; padding:0; background-color: #bade81; ">

    <form action="teacherEdit.php?id=<?php echo $edit_id; ?>" method="post" enctype="multipart/form-data">

        <p>Insert Update Informations</p>
             
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="tec_name" style="width:400x;" value="<?php echo $name; ?>" /></td>
            </tr>

            <tr>
                <td>Designation</td>
                <td><textarea name="tec_designation" rows="3"><?php echo $designation; ?></textarea></td>
            </tr>

            <tr>
                <td>Organization</td>
                <td><textarea name="tec_organization" rows="3"><?php echo $organization; ?></textarea></td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td><textarea name="tec_email" rows="3"><?php echo $email; ?></textarea></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><textarea name="tec_mobile" rows="3"><?php echo $mobile; ?></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td> <br /><button type="submit" name="submit">Update</button></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $edit_id = $_GET['tec_id'];
        //$current_date = date('F d,Y');
        $name = $_POST['tec_name'];
        $designation = $_POST['tec_designation'];
        $organization = $_POST['tec_organization'];
        $email = $_POST['tec_email'];
        $mobile = $_POST['tec_mobile'];

        if ($post_file == '') {
            $q = "UPDATE tblteacher SET tec_name='$name',tec_designation='$designation',tec_organization='$organization',tec_email='$email',tec_mobile='$mobile', WHERE tec_id='$edit_id'";
            mysqli_query($db, $q);
        } 
        
        echo "<script>alert('your information update successfuly')</script>";
        echo "<script>window.open('teacherView.php','_self')</script>";
    }
    ?>
</body>

</html>