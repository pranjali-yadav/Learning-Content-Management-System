<?php

	include 'database/session.php';
		
		// for client approvel

		$id = $_GET['id'];
		$status = $_GET['action'];
		$updatequery1 = "UPDATE bills SET action=$status WHERE id=$id";

		if($conn->query($updatequery1)){
			$_SESSION['success'] = 'Client updated successfully';
		}
		else{
		$_SESSION['error'] = 'DB Connection Error';
		}
	header('location: payment.php');


?>