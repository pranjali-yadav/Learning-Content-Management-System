<?php
	include 'database/session.php';

 
	if(isset($_POST['add'])){
		
		$inchname =$_POST['inchname'];
		$inchcontact =$_POST['inchcontact'];
		$ctitle =$_POST['ctitle'];
		$cdescription =$_POST['cdescription']; 
		$status = $_POST['status'];   

		$scid = $_POST['mcatid'];   

		$photo = $_FILES['photo']['name'];

		if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $user['photo'];  
			}
		
		
		
		$sql = "INSERT INTO content (scid, mcategory, scategory, ctitle, cdescription, photo, status, created_on) VALUES ('$scid', '$inchname', '$inchcontact', '$ctitle', '$cdescription', '$photo', '$status', NOW())";
		if($conn->query($sql)){ 
			$_SESSION['success'] = 'Record added successfully'; 
		} 
		else{ 
			$_SESSION['error'] = $conn->error;
		} 
	}	 
	else{
		$_SESSION['error'] = 'Fill up add form first'; 
	} 
 
	header('location: content.php'); 

?>   