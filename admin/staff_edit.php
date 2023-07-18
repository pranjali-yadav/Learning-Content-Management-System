<?php

	include 'database/session.php'; 

	if(isset($_POST['edit'])){  
		$empid = $_POST['id']; 
		$sname =$_POST['sname']; 
		$sarea =$_POST['sarea'];
		$status =$_POST['status']; 

 
		
		$sql = "UPDATE scategory SET name = '$sname', area = '$sarea', action = '$status'  WHERE id = '$empid'";  
		if($conn->query($sql)){
			$_SESSION['success'] = 'Sub Category  successfully';
		}
		else{   
			$_SESSION['error'] = $conn->error;
		}

	} 
	else{
		$_SESSION['error'] = 'Select Area to edit first';
	}
 
	header('location: scat.php');
?>  