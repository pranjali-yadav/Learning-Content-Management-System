
<!-- Add --> 
<div class="modal fade" id="addnew">  
    <div class="modal-dialog modal-lg">  
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Course</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                  <span aria-hidden="true">&times;</span></button>
            </div> 
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="content_add.php" enctype="multipart/form-data"> 
                  <input type="hidden" class="stid" name="id">
 
 
 
                <div class="form-group row">
                    

                 <div class="col-sm-4"> 
                     <label for="inchname" class="col-form-label">Select Main Category<span style="color: red;">* </span></label>

                          <select id="inchname" class="inchname form-control select2" name="inchname">
                               <option selected>--Select Main Category--</option>  
                                  <?php  
                                      $sql = mysqli_query($conn,"select * from mcategory");
                                      while($row=mysqli_fetch_array($sql))   
                                      { 
                                      echo '<option value="'.$row['area_name'].'">'.$row['area_name'].'</option>';
                                      } 
                                  ?>
                        </select>  

                    </div>



                     <div class="col-sm-6">


                       <label for="inchcontact" class="col-form-label">Select Sub-Category<span style="color: red;">* </span></label>
                       <select id="inchcontact" name="inchcontact" class="inchcontact form-control select2bs4"> 
                          <option  selected id="contact">Read-Only</option>
                        </select>  


                          <select id="mcatid" name="mcatid" class="mcatid form-control" hidden> 
                                    <option selected id="watid">Read-Only</option>
                        </select>


                    </div>  

  
                     <div class="col-sm-2"> 
                     <label for="status" class="col-form-label">Status<span style="color: red;">* </span></label>
                        <select class="status form-control" name="status" id="status">
                            <option  value="1">Active</option>
                             <option  value="0" >Deactive</option> 
                       
                        </select>
                    </div>

                    
                  
                </div>  
                <div class="form-group row">     
                  
                   <div class="col-sm-12"> 
                     <label for="ctitle" class="col-form-label">Course Title<span style="color: red;">* </span></label>
                         <input type="text" name="ctitle" class="ctitle form-control" placeholder="Enter title for course">
                    </div>
                      
   
                     <div class="col-sm-12">  
                     <label for="cdescription" class="col-form-label">Course Description<span style="color: red;">* </span></label>
                          <textarea id="cdescription" class="cdescription form-control" name="cdescription" rows="4" cols="50" placeholder="Enter course Description">
                              
                          </textarea>
                    </div>

                    <div class="col-sm-12">  
                     <label for="photo" class="col-form-label">Course Image<span style="color: red;">* </span></label>
                       <input type="file" id="image" name="photo" class="form-control" required>
                    </div>

                     
                </div> 
                
        

              
            </div>
            <div class="modal-footer justify-content-between">
             <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success" name="add"><i class="fa fa-check"></i> Add</button>
              </form>
            </div> 
        </div>
    </div>
</div>   



<!-- Edit -->   
<div class="modal fade" id="edit">  
    <div class="modal-dialog modal-lg">
        <div class="modal-content"> 
            <div class="modal-header"> 
              <h4 class="modal-title"><b><span class="author_id"></span></b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="content_edit.php" enctype="multipart/form-data">     
                  <input type="hidden" class="stid" name="id">

              
                 <div class="form-group row">
                    
 
                                <div class="col-sm-4"> 
                     <label for="edit_inchname" class="col-form-label">Select Main Category<span style="color: red;">* </span></label>

                          <select selected id="edit_inchname" class="edit_inchname form-control select2" name="inchname">
                 
                                  <?php  
                                      $sql = mysqli_query($conn,"select * from mcategory");
                                      while($row=mysqli_fetch_array($sql))   
                                      { 
                                      echo '<option value="'.$row['area_name'].'">'.$row['area_name'].'</option>';
                                      } 
                                  ?>
                        </select>
                    </div>
  
  
 
                     <div class="col-sm-6">
                       <label for="edit_inchcontact" class="col-form-label">Select Sub-Category<span style="color: red;">* </span></label>
                      <input type="text" class="edit_inchcontact form-control" id="edit_inchcontact" name="inchcontact"  placeholder="Enter Sub Category"> 
                      <!--  <select id="edit_inchcontact" name="inchcontact" class="edit_inchcontact form-control select2bs4"> 
                          <option selected id="inchcontact">Read-Only</option>
                        </select> -->  
                    </div>  

  
                     <div class="col-sm-2"> 
                     <label for="edit_status" class="col-form-label">Status<span style="color: red;">* </span></label>
                        <select class="edit_status form-control" name="status" id="edit_status">
                            <option  value="1">Active</option>
                             <option  value="0" >Deactive</option> 
                       
                        </select>
                    </div>

                    
                  
                </div>  
                <div class="form-group row">     
                  
                   <div class="col-sm-12"> 
                     <label for="edit_ctitle" class="col-form-label">Course Title<span style="color: red;">* </span></label>
                         <input type="text" name="ctitle" class="edit_ctitle form-control" id="edit_ctitle" placeholder="Enter title for course">
                    </div>
                      
   
                     <div class="col-sm-12">  
                     <label for="edit_cdescription" class="col-form-label">Course Description<span style="color: red;">* </span></label>
                          <textarea id="edit_cdescription" class="edit_cdescription form-control" name="cdescription" rows="4" cols="50" placeholder="Enter course Description">
                              
                          </textarea>
                    </div>

 
                     
                </div> 
           
              
            </div>
            <div class="modal-footer justify-content-between">
             <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>   


<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog"> 
        <div class="modal-content">  
            <div class="modal-header">
              <h4 class="modal-title">Deleting...</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div> 
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="content_delete.php" enctype="multipart/form-data">
                <input type="hidden" class="stid" name="id">  
                <div class="text-center">
                    <p>Delete Record Of</p>  
                    <h2 id="del_deduction" class="bold"></h2>
                </div>   
            </div> 
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger" id="delete" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script>

$(function(){

      //Initialize Select2 Elements
    $('.select2').select2() 

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

});




$(document).ready(function() 
{ 
$(".inchname").change(function()
{ 
var id3=$(this).val();  
var post_id3 = 'id3='+ id3;

var id2=$(this).val();  
var post_id2 = 'id2='+ id2;


$.ajax
({
type: "POST",
url: "ajax.php",  
data: post_id3,
cache: false, 
success: function(qwes)
{
$(".inchcontact").html(qwes);
} 
});



$.ajax
({
type: "POST",
url: "ajax.php",  
data: post_id2,
cache: false, 
success: function(qwese)
{
$(".mcatid").html(qwese);
} 
});



 
}); 

}); 


</script>
