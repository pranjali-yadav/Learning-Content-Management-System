<?php
	include 'database/session.php';

	if(isset($_POST['edit'])){ 
		$empid = $_POST['id']; 

		$inchname =$_POST['inchname'];
		$inchcontact =$_POST['inchcontact'];
		$ctitle =$_POST['ctitle'];
		$cdescription =$_POST['cdescription'];
		$status = $_POST['status'];  


		$sql = "UPDATE content SET mcategory = '$inchname', scategory = '$inchcontact', ctitle = '$ctitle', cdescription = '$cdescription', status = '$status' WHERE id = '$empid'";  
		if($conn->query($sql)){
			$_SESSION['success'] = 'Course updated successfully';
		}
		else{   
			$_SESSION['error'] = $conn->error;
		}

	} 
	else{
		$_SESSION['error'] = 'Select Course to edit first';
	}

	header('location: content.php'); 
?>  