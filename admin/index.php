<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BVP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  
  
  <style>
      
element.style {
}

.table td, .table th{
    padding: 8px !important;
}
  </style>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <?php
  
  session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
  
$mysqli = new mysqli("localhost","u158205072_bvp","Bvp12345","u158205072_bvp");
if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $sql = "SELECT * FROM donations";
$result = $mysqli->query($sql);



  ?>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/admin/logo1.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
       <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){?>
        <li class="float-right">
            <a href="logout.php" class="btn btn-danger float-right">Logout</a>
        </li>
      <?php  } ?>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">

      </li>

      <!-- Messages Dropdown Menu -->


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <div class="container">
  <div class="row">
    <div class="col-lg-2">
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <img src="/admin/logo1.png" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> 
            <div class="info">
              <a href="#" class="d-block">Admin</a>
            </div>
          </div>



          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                <a href="/admin/index.php" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Donations

                  </p>
                </a>
                 

              </li>
              <li class="nav-item menu-open">
                <a href="/admin/reset-password.php" class="nav-link active">
                  <i class="fa fa-key"></i>
                  <p>
                   Reset Password

                  </p>
                </a>
                 

              </li>
              
              

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    </div>
    <div class="col-lg-10">
      <section class="mb-5">
        <h2 class="text-center mt-5 mb-5">View Donations</h2><span class="float-right"><a class="btn btn-success mb-5" href="/admin/add-donation.html">Add Donation</a></span>
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">Name of Charity</th>
                <th scope="col">Country of Charity</th>
                <th scope="col">Amount Donated (BVP)</th>
                <th scope="col">Date of Donation</th>
                <th scope="col">Links to Charity Organisation</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
              ?>
              <tr>

                <td><?php echo $row["charity_name"] ?></td>
                <td><?php echo $row["charity_country"] ?></td>
                <td><?php echo $row["amount"] ?></td>
                <td><?php echo $row["date"] ?></td>
                <td><?php echo $row["links"] ?></td>
                <td><a href="/admin/edit-donation.php?id=<?php echo $row['id']?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                <a href="/admin/delete-donation.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              </td>
              </tr>
            <?php } } ?>

            </tbody>
          </table>
    </section>
    </div>
  </div>
</div>


  <!-- Content Wrapper. Contains page content -->



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="http://cplussoft.com/">Cplussoft</a>.</strong>
    All rights reserved.
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
