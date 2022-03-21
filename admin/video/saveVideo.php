<?php
require_once('../config/dbcon.php');
$upload_dir = '../uploads/video/';

if (isset($_POST['Submit'])) {
	$title = $_POST['title'];
	$discription = $_POST['discription'];
	$thumbnailName = $_FILES['thumbnail']['name'];
	$thumbnailTmp = $_FILES['thumbnail']['tmp_name'];
	$thumbnailSize = $_FILES['thumbnail']['size'];
	// $videoName = $_FILES['video']['name'];
	// $videoTmp = $_FILES['video']['tmp_name'];
	// $videoSize = $_FILES['video']['size'];
	if (empty($title)) {
		$errorMsg = 'Please input title..';
	} elseif (empty($discription)) {
		$errorMsg = 'Please input discription..';
	} elseif (empty($thumbnail)) {
		$errorMsg = 'Please input thumbnail..';
		// } elseif (empty($video)) {
	} else {
		$thumbnailExt = strtolower(pathinfo($thumbnailName, PATHINFO_EXTENSION));
		$thumbnailExt  = array('jpeg', 'jpg', 'png', 'gif');
		$thumbnailPic = time() . '_' . rand(1000, 9999) . '.' . $thumbnailExt;
		if (in_array($thumbnailExt, $thumbnailExt)) {
			if ($thumbnailSize < 5000000) {
				move_uploaded_file($thumbnailTmp, $upload_dir . $thumbnailPic);
			} else {
				$errorMsg = 'thumbnail too large';
			}
		} else {
			$errorMsg = 'Please select a valid thumbnail';
		}
	}
	if (!isset($errorMsg)) {
		$sql = "INSERT INTO tblvideo (title, discription, thumbnail)
					values('" . $title . "','" . $discription . "','" . $thumbnail . "')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$successMsg = 'New record added successfully';
			header('Location: index.php');
		} else {
			$errorMsg = 'Error ' . mysqli_error($conn);
		}
	}
}
