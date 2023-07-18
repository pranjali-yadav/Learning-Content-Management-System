 <?php include 'database/session.php'; ?> 
<?php include 'includes/header.php'; ?> 
<body class="hold-transition sidebar-mini">
<div class="wrapper"> 
  <!-- Navbar --> 
<?php include 'includes/navbar.php'; ?> 
<?php include 'includes/menubar.php'; ?>
  <!-- Content Wrapper. Contains page content --> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Sub-Category</h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Sub-Category</li>
            </ol>
          </div>
        </div> 
      </div><!-- /.container-fluid -->
    </section>  

    <!-- Main content -->    
    <section class="content">
      <?php 
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-12">
            <div class="card">
             <div class="card-header"> 
            <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-flat">Add New</a>
          </div>
              <!-- /.card-header --> 
               <div class="card-body table-responsive">
                <table id="example2" class="display nowrap table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th>Category</th>  
                    <th>Sub-Category</th>
                    <th>Icon Img</th>
                    <th>Action</th>
                    <th>Status</th>
                  </tr>  
                  </thead>
                  <tbody>
 
                  <?php
                    $sql = "SELECT * FROM scategory";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                     ?>
                    <tr> 
 
                        <td><?php echo $row['id']; ?></td>
                         <td><?php echo $row['area']; ?></td> 
                        <td><?php echo $row['name']; ?></td>  
                        <td> <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo (!empty($row['sicon']))? '../images/'.$row['sicon']:'../images/image (1).png'; ?>"
                       alt="User profile picture"></td>   
                         <td>   <button class='btn btn-success btn-sm edit btn-flat' data-id="<?php echo $row['id']; ?>"><i class='fa fa-edit'></i> Edit</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i> Delete</button> 
                          </td>
                         <td> <center>
                           <?php 
 
                              if ($row['action']==1) {
                                echo '<p><a href="#" class="btn btn-sm btn-success">Active</a></p>';
                              } 
                              else
                              {
                                  echo '<p><a href="#" class="btn btn-sm btn-danger">Deactive</a></p>';
                                }

                              ?> 
                              </center></td>  
                        
                        </tr>
                     <?php 
                    } 
                  ?> 



                  </tbody>      
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'includes/footer.php'; ?> 
<?php include 'modals/staff_modal.php'; ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 
<?php include 'includes/scripts.php'; ?>

<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show'); 
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){ 
    e.preventDefault();
    $('#delete').modal('show'); 
    var id = $(this).data('id');
    getRow(id);
  });

  $('.photo').click(function(e){
    e.preventDefault(); 
    var id = $(this).data('id'); 
    getRow(id);
  });  

});
 

function getRow(id){
  $.ajax({
    type: 'POST', 
    url: 'staff_row.php',  
    data: {id:id},
    dataType: 'json',
    success: function(response){
        $('.stid').val(response.id);   
      $('.customer_id').html(response.customer_id);
      $('#del_deduction').html(response.name);
 
      $('#staff_name').html(response.name);
      $('#edit_name').val(response.name); 

      $('#edit_contact').val(response.contact);
      $('#edit_area').val(response.area); 
    
      $('#edit_status').val(response.action);

  
    }  
  });
}
</script>


<!-- page script -->
<script>
  $(function () {
    $('#example2').DataTable({ 
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
