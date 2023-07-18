
<!-- Add --> 
<div class="modal fade" id="addnew">  
    <div class="modal-dialog modal-md"> 
        <div class="modal-content"> 
            <div class="modal-header">
              <h4 class="modal-title">Add New Sub-category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                  <span aria-hidden="true">&times;</span></button>
            </div> 
            <div class="modal-body"> 
              <form class="form-horizontal" method="POST" action="staff_add.php" enctype="multipart/form-data"> 
                  <input type="hidden" class="stid" name="id">

                  <div class="form-group row"> 
                        <label for="area" class="col-sm-4 control-label">Select Main Category<span style="color: red;">* </span></label> 
                         <div class="col-sm-8"> 
                          <select id="area" class="area form-control select2" name="area">
                               <option selected>--Select Category--</option>  
                                  <?php   
                                      $sql = mysqli_query($conn,"select * from mcategory");
                                      while($row=mysqli_fetch_array($sql))  
                                      {  
                                      echo '<option value="'.$row['area_name'].'">'.$row['area_name'].'</option>';
                                      } 
                                  ?>
                        </select> 
                        </div> 

                          <select id="mcatid" name="mcatid" class="mcatid form-control" hidden> 
                                    <option selected id="watid">Read-Only</option>
                        </select>

                    </div>  
   
             
                
                 <div class="form-group row">
                      <label for="sname" class="col-sm-4 control-label">Subcategory Name<span style="color: red;">* </span></label>
                    <div class="col-sm-8">
                      <input type="text" id="sname" name="sname" class="form-control" placeholder="Enter Name" required> 
                    </div>
                  </div> 

                   <div class="form-group row">
                      <label for="image" class="col-sm-4 control-label">Category Icon (50*50)<span style="color: red;">* </span></label>
                    <div class="col-sm-8">
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
    <div class="modal-dialog modal-md">
        <div class="modal-content"> 
            <div class="modal-header"> 
              <h4 class="modal-title"><b><span class="author_id"></span></b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="staff_edit.php" enctype="multipart/form-data">     
                  <input type="hidden" class="stid" name="id">

              

                    <div class="form-group row"> 
                        <label for="edit_area" class="col-sm-4 control-label">Select Main Category</label>
                         <div class="date col-sm-8">  
                          <select id="edit_area" class="edit_area form-control select2" name="sarea">
                               <option selected>--Select Category--</option>   
                                  <?php  
                                      $sql = mysqli_query($conn,"select * from mcategory");
                                      while($row=mysqli_fetch_array($sql))  
                                      { 
                                      echo '<option value="'.$row['area_name'].'">'.$row['area_name'].'</option>';
                                      } 
                                  ?>
                        </select>
                        </div> 
                    </div> 
 

                    
                        <div class="form-group row">
                      <label for="edit_name" class="col-sm-4 control-label">Subcategory Name</label>
                    <div class="col-sm-8">
                      <input type="text" id="edit_name" name="sname" class="form-control" placeholder="Enter Name">
                    </div>
                  </div> 
 



                     <div class="form-group row"> 
                        <label for="edit_status" class="col-sm-4 control-label">Select Status</label>
                         <div class="date col-sm-8">  
                        <select class="edit_status form-control" name="status" id="edit_status">
                            <option  value="1">Active</option>
                             <option  value="0" >Deactive</option> 
                       
                        </select>
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
              <form class="form-horizontal" method="POST" action="staff_delete.php" enctype="multipart/form-data">
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
$(".area").change(function()
{ 
var id4=$(this).val();  
var post_id4 = 'id4='+ id4;


$.ajax
({
type: "POST",
url: "ajax.php",   
data: post_id4,
cache: false, 
success: function(qwese)
{
$(".mcatid").html(qwese);
} 
});


 
}); 

}); 




</script>