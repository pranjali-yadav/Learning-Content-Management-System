<?php


include('database/conn.php');



//for subcategory fetch on content add 

 if($_POST['id3']){ 
	$id=$_POST['id3'];   
	if($id==1){   
		echo "<option>Sub-Category</option>";  
		}else{ 
			$sql = mysqli_query($conn,"SELECT * FROM `scategory` WHERE area='$id'"); 
			while($row = mysqli_fetch_array($sql)){
				echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
				} 
			}
		}


		 if($_POST['id2']){ 
	$id=$_POST['id2'];   
	if($id==1){   
		echo "<option>Sub-Category ID</option>";  
		}else{ 
			$sql = mysqli_query($conn,"SELECT * FROM `scategory` WHERE area='$id'"); 
			while($row = mysqli_fetch_array($sql)){
				echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';
				} 
			}
		}


//for main category id fetch when subcategory add 


 if($_POST['id4']){  
	$id=$_POST['id4'];    
	if($id==1){     
		echo "<option>Catgory ID</option>";  
		}else{ 
			$sqly = mysqli_query($conn,"SELECT * FROM `mcategory` WHERE area_name ='$id'"); 
			while($row = mysqli_fetch_array($sqly)){
				echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';
				} 
			}
		}

 


?>