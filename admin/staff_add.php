<?php
	include 'database/session.php';

 
	if(isset($_POST['add'])){
		
		$sname =$_POST['sname'];
		$area =$_POST['area']; 
		$mcid = $_POST['mcatid']; 
		$photo = $_FILES['photo']['name'];
		$action = 1;  
		 if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $user['photo'];  
			}
		
		$sql = "INSERT INTO scategory (mcid, name, area, sicon, action, created_on) VALUES ('$mcid', '$sname', '$area', '$photo', '$action', NOW())";
		if($conn->query($sql)){ 
			$_SESSION['success'] = 'Sub Category added successfully'; 
		} 
		else{ 
			$_SESSION['error'] = $conn->error;
		} 
	}	 
	else{
		$_SESSION['error'] = 'Fill up add form first'; 
	} 
 
	header('location: scat.php'); 

?>  