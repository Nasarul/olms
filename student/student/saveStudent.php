<?php
  require_once('../config/dbcon.php');
  $upload_dir = '../uploads/student/';

  if (isset($_POST['Submit'])) {
   	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$designation = $_POST['designation'];
	$organization = $_POST['organization'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$dob = date('Y-m-d', strtotime($_POST['dob'])); 
	$bg = $_POST['bg']; 
    $imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

    if(empty($roll)){
			$errorMsg = 'Please input rool..';
		}elseif(empty($name)){
			$errorMsg = 'Please input name..';	
		}elseif(empty($designation)){
			$errorMsg = 'Please input designation..';
		}elseif(empty($organization)){
			$errorMsg = 'Please input organization..';	
		}elseif(empty($email)){
			$errorMsg = 'Please input email..';
		}elseif(empty($mobile)){
			$errorMsg = 'Please input mobile..';
		}elseif(empty($dob)){
			$errorMsg = 'Please input date of birth..';
		}elseif(empty($bg)){
			$errorMsg = 'Please input blood group..';
		}else{

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}


		if(!isset($errorMsg)){
			$sql = "INSERT INTO tblstudent(roll, name, designation, organization, email, mobile, dob, bg, image)
					values('".$roll."','".$name."', '".$designation."', '".$organization."', '".$email."', '".$mobile."', '".$dob."', '".$bg."','".$userPic."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: index.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>