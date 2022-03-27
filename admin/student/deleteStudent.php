<?php
include('../config/dbcon.php');
$upload_dir = '../uploads/student/';

if (isset($_GET['delete'])) {
  $stu_id = $_GET['delete'];
  $sql = "SELECT * FROM tblstudent WHERE stu_id=" . $stu_id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $image = $row['image'];
    unlink($upload_dir . $image);
    $sql = "DELETE FROM tblstudent WHERE stu_id=" . $stu_id;
    if (mysqli_query($conn, $sql)) {
      header('location:index.php');
    }
  }
}
?>