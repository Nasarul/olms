<?php
require_once('../config/dbcon.php');

if (isset($_POST['Submit'])) {
	$course_id = $_POST['course_id'];
	$name = $_POST['name'];
	$code = $_POST['code'];

	if (empty($course_id)) {
		$errorMsg = 'Please input Course IDs..';
	} elseif (empty($name)) {
		$errorMsg = 'Please input name..';
	} 
	elseif (empty($code)) {
		$errorMsg = 'Please input code..';
	} else {

		if (!isset($errorMsg)) {
			$sql = "INSERT INTO tblsubject(course_id, name, code)
					values('" . $course_id . "','" . $name . "', '" . $code . "')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				$successMsg = 'New record added successfully';
				header('Location: index.php');
			} else {
				$errorMsg = 'Error ' . mysqli_error($conn);
			}
		}
	}
}
?>