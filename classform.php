<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ບັນທຶກປະຈຳວັນ</title>
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
$sql = "SELECT * FROM class";
$result = mysqli_query($conn, $sql);
?>
<?php
if (isset($_GET['success']) && $_GET['success'] === 'true') {
    echo '<script>alert("Data inserted successfully!");</script>';
} elseif (isset($_GET['success']) && $_GET['success'] === 'false') {
    echo '<script>alert("Error inserting data.");</script>';
}
?>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <h1 class="text-center">ຟອມຫ້ອງຮຽນ</h1>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="insertclass.php">
                <div class="card-body">
                 
                  <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ຊື່ຫ້ອງຮຽນ</label>
                    <input type="text" name="classname" class="form-control" id="exampleInputEmail1" required placeholder="ຊື່ຫ້ອງ">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">ຊື່ວິຊາ</label>
                    <select name="subject_id" id="" class="form-control">
                    <?php 
include("./includes/db.php");
$sql = "SELECT subject.sub_name as subject_name FROM subject";
$result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                   echo '<option value="' . $row['subject_name'] . '">' . $row['subject_name'] . '</option>';
                   }
                   ?>
                    </select>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">ຊື່ຄູສອນ</label>
                    <select name="teacher_id" id="" class="form-control">
                    <?php 
include("./includes/db.php");
$sql = "SELECT first_name as teacher_name FROM user WHERE role=3";
$result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                   echo '<option value="' . $row['teacher_name'] . '">' . $row['teacher_name'] . '</option>';
                   }
                   ?>
                    </select>
                  </div>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">ສົ່ງຟອມ</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6" style="overflow: auto;">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ຊື່ຫ້ອງຮຽນ</th>
                  <th>ຊື່ວິຊາຮຽນ</th>
                  <th>ຊື່ຄູສອນ</th>
                  <th>ປຸ່ມຄຳສັ່ງ</th>
                </tr>
              </thead>
              <tbody>

                <?php 
include("./includes/db.php");
$sql = "SELECT Cid, classname, subject.sub_name as subject_name, user.first_name as teacher_name FROM class JOIN subject ON class.subject_id = subject.sub_Id JOIN user ON class.teacher_id = user.id WHERE user.role=3";
$result = mysqli_query($conn, $sql);
 while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?php echo $row['Cid']; ?></td>
                  <td><?php echo $row['classname']; ?></td>
                  <td><?php echo $row['subject_name']; ?></td>
                  <td><?php echo $row['teacher_name']; ?></td>
                  <td><a class="btn btn-warning" href="editclass.php?Cid=<?php echo $row["Cid"]; ?>"><i class="fas fa-edit"></i></a>&nbsp;<a onclick="confirmDelete(<?php echo $row['Cid'];?>)" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
                </tr>
               <?php } ?>
              </tbody>
            </table>
          </div>
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
<script>
function confirmDelete($id) {
    // Using SweetAlert2 for the confirmation dialog
    Swal.fire({
        title: 'ຕ້ອງການລຶບແທ້ ຫຼື ບໍ່?',
        text: 'ລຶບແລ້ວບໍ່ສາມາດກູ້ຄືນໄດ້! ID: '+$id,
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'ຍົກເລີກ',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'ຢືນຢັນ!'
    }).then((result) => {
        if (result.isConfirmed) {
            // If the user confirms, redirect to the PHP script handling the delete
            window.location.href = 'deleteclass.php?Cid=' + $id;
        }
    });
}
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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