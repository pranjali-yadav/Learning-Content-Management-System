<!DOCTYPE html>
<html>
<head>
</head>
<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  } 
?> 
<?php include 'includes/header.php'; ?>
<style> 
     form i {

    cursor: pointer; 
}
</style> 
<body class="hold-transition login-page" style="background-image:url(../images/login-bg.jpg);  
      height: 100%; 
      background-position: center;
      background-repeat: no-repeat; 
      background-size: cover;">
<div class="login-box">   
  <br><br><br><br>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">  
     
      <div class="login-logo"> 
       <!-- <a href="#" style="cursor: pointer;"> <img src="../images/logo.png" style="height: auto; width: 100%;"></a> -->
       <h1 style="text-align: center; color: red;"><b> College Project </b></h1>
      </div> 
       <p class="login-box-msg">Sign in to start your admin session</p>
      <form action="login.php" method="POST">

        <div class="input-group mb-3">
           <input type="text" class="form-control" name="username" placeholder="Admin Username" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Admin Password" id="myInput" required>
         <div class="input-group-append">
            <div class="input-group-text">
                <i class="fa fa-lock"></i>
              </div>
          </div>
        </div> 

        
        <div class="row"> 
          <div class="col-8">
            <div class="form-group"> 
              <input type="checkbox" onclick="myFunction()">
              <label>
                Show Password
              </label> 
            </div> 
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
 
      
    </div> 

    <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center mt20'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
    ?>
    <!-- /.login-card-body -->
  </div>
</div>

 <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<!-- /.login-box -->
<?php include 'includes/scripts.php'; ?>



</body>
</html>
