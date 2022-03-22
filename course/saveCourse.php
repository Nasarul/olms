<?php
require_once('../config/dbcon.php');

if (isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$duration = $_POST['duration'];

	if (empty($name)) {
		$errorMsg = 'Please input name..';
	} elseif (empty($duration)) {
		$errorMsg = 'Please input duration..';
	} else {

		if (!isset($errorMsg)) {
			$sql = "INSERT INTO tblcourse(name, duration)
					values('" . $name . "', '" . $duration . "')";
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