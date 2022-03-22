<?php
session_start();

include ('../config/dbcon.php');

if(isset($_POST['addAdminUser']))
{
    $name = $_POST['adm_name'];
    $email = $_POST['adm_email'];
    $mobile = $_POST['adm_mobile'];
    $username = $_POST['adm_username'];
    $password = $_POST['adm_password'];

    $user_query ="INSERT INTO tbladmin (adm_name,adm_email,adm_mobile,adm_username,adm_password) VALUES ('$name','$email','$mobile','$username','$password')";
    $user_query_run = mysqli_query($conn, $user_query);

    if($user_query_run)
    {
        $_SESSION['status'] = "User Added Successfully";
        header("Location: ../adminUsers.php");
    }
    else{
        $_SESSION['status'] = "User Registration Faild";
        header("Location: ../adminUsers.php");
    }
}

?>
