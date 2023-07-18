<?php include 'database/session.php'; ?>
<?php 
  include '../timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  } 
?>
 
<!DOCTYPE html> 
<html>
<head>   
</head>    
  
<?php include 'includes/header.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php include 'includes/navbar.php'; ?>  
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 
    <br>
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

        <!-- Small boxes (Stat box) -->
                <div class="row">
        
          <!-- ./col --> 
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">  
                  <?php
                    $sql = "SELECT * FROM mcategory";
                    $query = $conn->query($sql);
                    echo "<h4><b>".$query->num_rows."</b></h4>";
                  ?>
      
                   <p><b>Total Category</b></p>
              </div> 
              <div class="icon">
                <i class="fa fa-file-alt"></i>
              </div>
              <a href="mcat.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                
           <?php
               
              $sql = "SELECT * FROM scategory";
                    $query = $conn->query($sql);
                    echo "<h4><b>".$query->num_rows."</b></h4>"; 
              ?>
       
                <p><b>Total Sub-Category</b></p>
              </div> 
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
              <a href="scat.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-teal">  
              <div class="inner">
              
                 <?php
               
                    $sql = "SELECT * FROM content WHERE status = 1";
                    $query = $conn->query($sql);
                    echo "<h4><b>".$query->num_rows."</b></h4>";
             
                  
              ?>
                 <p>Total Active Courses</p>
              </div> 
              <div class="icon">
              <i class="fa fa-list"></i>
              </div>
              <a href="content.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

                  <div class="col-lg-3 col-6">

              <div class="small-box bg-danger">
                <div class="inner">
              
                 <?php
               
                $sql = "SELECT * FROM content WHERE status = 0";
                    $query = $conn->query($sql);
                    echo "<h4><b>".$query->num_rows."</b></h4>";
              
              ?>
            
                 <p>Total Deactive Courses</p>
                </div> 
                <div class="icon"> 
                  <i class="fa fa-list"></i> 
                </div>
                <a href="content.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
       
        </div>


      
        
      </div>







   


    </section>  
  </div>
 
<?php include 'includes/footer.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




<!-- End Chart Data -->

<?php include 'includes/scripts.php'; ?>

 


</body>
</html>
