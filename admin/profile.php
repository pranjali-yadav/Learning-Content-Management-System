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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6"> 
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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

          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card card-danger card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo (!empty($user['photo']))? '../images/'.$user['photo']:'../images/profile.jpg'; ?>"
                       alt="User profile picture">
                </div>
                <h3 class="profile-username text-center"><?php echo $user['firstname'].' '.$user['lastname'];?></h3>
                <p class="text-muted text-center">Member Since : <?php echo $user['created_on']; ?></p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?php echo $user['username']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Password</b> <a class="float-right"> ************</a>
                  </li>
                </ul>
                <a href="#profile" data-toggle="modal" class="btn btn-info btn-block"><i class="fa fa-edit"></i><b>Edit Login Profile</b></a> 
              </div>
            </div>
          </div> 


        </div> 
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'includes/footer.php'; ?>
<?php include 'modals/profile_modal.php'; ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar --> 
</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<!-- page script -->
<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id'); 
    getRow(id);
  });

});

function getRow(id){
  $.ajax({ 
    type: 'POST',
    url: 'profile_row.php',
    data: {id:id},
    dataType: 'json',   
    success: function(response){ 
      $('.id').val(response.id);
      $('#edit_cname').val(response.cname);
      $('#edit_ctagline').val(response.ctagline);
      $('#edit_caddress').val(response.caddress);
      $('#edit_ccontact').val(response.ccontact);

      $('#del_deduction').html(response.mesars_name);
    } 
  }); 
}

</script>
</body>
</html>
