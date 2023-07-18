<?php
	include 'database/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM mcategory WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Category deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select Category to delete first';
	}

	header('location: mcat.php');
	
?>