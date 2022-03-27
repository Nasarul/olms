<?php
include('../config/dbcon.php');
// $upload_dir = '../uploads/teacher/';

if (isset($_GET['delete'])) {
  $course_id = $_GET['delete'];
  $sql = "SELECT * FROM tblcourse WHERE course_id=" . $course_id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    // $image = $row['image'];
    // unlink($upload_dir . $image);
    $sql = "DELETE FROM tblcourse WHERE course_id=" . $course_id;
    if (mysqli_query($conn, $sql)) {
      header('location:index.php');
    }
  }
}
?>