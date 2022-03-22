<?php 
include("connect.php"); 

if(isset($_GET['id'])){

	$delete_id = $_GET['id'];
	
	$delete="DELETE from `tblteacher` WHERE tec_id='$delete_id'";
	
	mysqli_query($db,$delete);				
	
    echo "<script>alert('Your information deleted successfuly')</script>";
   	echo "<script>window.open('teacherView.php','_self')</script>";
}
?>
