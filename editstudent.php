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
?>

<?php 
include("./includes/db.php");

// Get user ID from URL parameter
$id = $_GET["id"];

// Retrieve user information from database
$sql = "SELECT * FROM user WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Process form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $village = $_POST["village"];
    $district = $_POST["district"];
    $province = $_POST["province"];
    $u_phone = $_POST['u_phone'];
    $mobilephone = $_POST['mobile_phone'];
    $tuition_fees = $_POST['income'];
    $tuition_fees_reason = $_POST['in_reason'];
    
    // Update user information in database
    $sql = "UPDATE user SET first_name='$firstname', last_name='$lastname', birthday='$birthday', email='$email',
            password='$password', village='$village', district='$district', province='$province',
            u_phone='$u_phone', mobile_phone='$mobilephone', income='$tuition_fees', in_reason='$tuition_fees_reason' WHERE id=$id";
    mysqli_query($conn, $sql);
       // Redirect to user profile page
}

mysqli_close($conn); // Close database connection
?>

<!-- HTML form to display user information and allow editing -->


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <h1 class="text-center">ແກ້ໄຂຂໍ້ມູນນັກຮຽນ</h1>
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">ຊື່</label>
                                <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">ນາມສະກຸນ</label>
                                <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name']?>">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">ວັນເດືອນປີເກີດ</label>
                                <input type="text" class="form-control" name="birthday" value="<?php echo $row['birthday']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">ອີເມວ</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">ລະຫັດຜ່ານ</label>
                                <input type="text" class="form-control" name="password" value="<?php echo $row['password']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">ທີ່ຢູ່ ບ້ານ</label>
                                <input type="text" class="form-control" name="village" value="<?php echo $row['village']?>">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">ເມືອງ</label>
                                <input type="text" class="form-control" name="district" value="<?php echo $row['district']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">ແຂວງ</label>
                                <input type="text" class="form-control" name="province" value="<?php echo $row['province']?>">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">ເບີໂທ</label>
                                <input type="text" class="form-control" name="u_phone" value="<?php echo $row['u_phone']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">ມືຖື</label>
                                <input type="text" class="form-control" name="mobile_phone" value="<?php echo $row['mobile_phone']?>">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">ຈຳນວນເງິນ</label>
                                <input type="number" class="form-control" name="income" value="<?php echo $row['income']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">ຄ່າຮຽນ</label>
                                <input type="text" class="form-control" name="in_reason" value="<?php echo $row['in_reason']?>">
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">ອັບເດດ</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
       
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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