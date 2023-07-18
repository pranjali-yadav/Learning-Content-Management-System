<?php
	include 'database/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM scategory WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Sub Category  deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select Sub Category  to delete first';
	}

	header('location: scat.php');
	
?>