
<!-- Add --> 
<div class="modal fade" id="addnew">  
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Main Category</h4> 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                  <span aria-hidden="true">&times;</span></button>
            </div> 
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="area_add.php" enctype="multipart/form-data"> 
                  <input type="hidden" class="stid" name="id">

                
                <div class="form-group row">
                      <label for="aname" class="col-sm-4 control-label">Category Name<span style="color: red;">* </span></label>
                  <div class="col-sm-8">
                      <input type="text" id="aname" name="aname" class="form-control" placeholder="Enter Name">
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
              <form class="form-horizontal" method="POST" action="area_edit.php" enctype="multipart/form-data">     
                  <input type="hidden" class="stid" name="id">

               
                
                    <div class="form-group row">
                      <label for="area_name" class="col-sm-4 control-label">Category Name</label>
                    <div class="col-sm-8">
                      <input type="text" id="area_name" name="aname" class="form-control" placeholder="Enter Name">
                    </div>
                  </div> 


                    <div class="form-group row">
                      <label for="area_name" class="col-sm-4 control-label">Status</label>
                  <div class="col-sm-8">
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
              <form class="form-horizontal" method="POST" action="area_delete.php" enctype="multipart/form-data">
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

</script>