<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ແກ້ໄຂຂໍ້ມູນນັກຮຽນ</title>
    <link rel="icon" href="image/logo.jpg">
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

  <link href='https://fonts.googleapis.com/css?family=Noto Sans Lao' rel='stylesheet'>
<style>
body {
    font-family: 'Noto Sans Lao';
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php
include("./includes/navbar.php");
include("./includes/sidebar.php");
include("./includes/db.php");
$id = $_GET["id"];

// if the form was submitted, update the row in the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST["first_name"];
  $email = $_POST["email"];
  $u_phone = $_POST["u_phone"];

  $sql = "UPDATE user SET first_name='$first_name', email='$email', u_phone='$u_phone' WHERE id=$id";
  mysqli_query($conn, $sql);
  header("Location: studentform.php"); // redirect back to the main page
}

// get the current values of the row from the database
$sql = "SELECT * FROM user WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// close the database connection
mysqli_close($conn);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- right column -->
        
          <div class="col-md-12">
            <!-- Form Element sizes -->
            <h1 class="text-center">ແກ້ໄຂຂໍ້ມູນນັກຮຽນ</h1>
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">
                <form action="studentform.php" method="post" class="horizontal">
                    <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6">
                      <label for="">ຊື່</label>
                <input class="form-control form-control-lg" value="<?php echo $row['first_name']; ?>" name="first_name" type="text" required>
                
                      </div>
                      <div class="col-md-6">
                      <label for="">ນາມສະກຸນ</label>
                <input class="form-control form-control-lg" value="<?php echo $row['last_name']; ?>" name="last_name" type="text" required>
                      </div>
                    </div>
                    </div>
                
                <div class="mb-3">
                <div class="row">
                  <div class="col-md-6">
                  <label for="">ວັນເດືອນປີເກີດ</label>
                <input class="form-control form-control-lg" value="<?php echo $row['birthday']; ?>" name="birthday" type="text" required>
                
                  </div>
                  <div class="col-md-6">
                  <label for="">ອີເມວ</label>
                <input class="form-control form-control-lg" value="<?php echo $row['email']; ?>" name="email" type="text" required>
                
                  </div>
                </div>
                </div>
                
                <div class="mb-3">
                <div class="row">
                  <div class="col-md-6">
                  <label for="">ລະຫັດຜ່ານ</label>
                <input class="form-control form-control-lg" value="<?php echo $row['password']; ?>" name="password" type="text" required>
                
                  </div>
                  <div class="col-md-6">
                  <label for="">ທີ່ຢູ່ ບ້ານ</label>
                <input class="form-control form-control-lg" value="<?php echo $row['village']; ?>" name="village" type="text" required>
                
                  </div>
                </div>
                </div>
               
               <div class="mb-3">
               <div class="row">
                  <div class="col-md-6">
                  <label for="">ເມືອງ</label>
                <input class="form-control form-control-lg" value="<?php echo $row['district']; ?>" name="district" type="text" required>
                
                  </div>
                  <div class="col-md-6">
                  <label for="">ແຂວງ</label>
                <input class="form-control form-control-lg" value="<?php echo $row['province']; ?>" name="province" type="text" required>
                
                  </div>
                </div>
               </div>
               
                <div class="mb-3">
                <div class="row">
                  <div class="col-md-6">
                  <label for="">ເບີໂທ</label>
                <input class="form-control form-control-lg" value="<?php echo $row['u_phone']; ?>" name="u_phone" type="text" required>
                
                  </div>
                  <div class="col-md-6">
                  <label for="">ມືຖື</label>
                <input class="form-control form-control-lg" value="<?php echo $row['mobile_phone']; ?>" name="mobile_phone" type="text" required>
                
                  </div>
                </div>
                </div>
                <button type="submit" class="btn btn-success">ອັບເດດ</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 
<?php 
include("./includes/footer.php");
?>
</div>

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