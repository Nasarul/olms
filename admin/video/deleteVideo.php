<?php
include('../config/dbcon.php');
$upload_dir = '../uploads/video/';

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sql = "SELECT * FROM tblvideo WHERE id=" . $id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $thumbnail = $row['thumbnail'];
    // $video = $row['video'];
    unlink($upload_dir . $thumbnail);
    $sql = "DELETE FROM tblvideo WHERE id=" . $id;
    if (mysqli_query($conn, $sql)) {
      header('location:index.php');
    }
  }
}
?>