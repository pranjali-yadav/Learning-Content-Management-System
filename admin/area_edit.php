<?php

	include 'database/session.php'; 

	if(isset($_POST['edit'])){ 
		$empid = $_POST['id']; 
		$aname =$_POST['aname'];
		$status =$_POST['status'];  

 
		
		$sql = "UPDATE mcategory SET area_name = '$aname', status = '$status'  WHERE id = '$empid'";  
		if($conn->query($sql)){
			$_SESSION['success'] = 'Category Updated successfully';
		}
		else{   
			$_SESSION['error'] = $conn->error;
		}

	} 
	else{
		$_SESSION['error'] = 'Select Category to edit first';
	}
 
	header('location: mcat.php');
?>  