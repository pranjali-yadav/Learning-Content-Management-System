<?php
	include 'database/session.php';

 
	if(isset($_POST['add'])){
		
		$aname =$_POST['aname'];
		$action = 1; 
		  	
		
		$sql = "INSERT INTO mcategory (area_name, status, created_on) VALUES ('$aname', '$action', NOW())";
		if($conn->query($sql)){ 
			$_SESSION['success'] = 'Category  added successfully'; 
		} 
		else{ 
			$_SESSION['error'] = $conn->error;
		} 
	}	 
	else{
		$_SESSION['error'] = 'Fill up add form first'; 
	} 
 
	header('location: mcat.php'); 

?>  