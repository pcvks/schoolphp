<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ບັນທຶກນັກຮຽນ</title>
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

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
$sql = "SELECT * FROM user WHERE expenditure IS NULL AND role=1";
$result = mysqli_query($conn, $sql);
if (isset($_GET['success']) && $_GET['success'] === 'true') {
  echo '<script>alert("ຂໍ້ມູນທີ່ປ້ອນຖືກບັນທຶກສຳເລັດແລ້ວ!");</script>';
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
            <h1 class="text-center">ຟອມລົງທະບຽນ</h1>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="insert.php">
                <div class="card-body">
                  
                  <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ຊື່</label>
                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" required placeholder="ກະລຸນາປ້ອນຊື່">
                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="form-group">
                    <label for="exampleInputPassword1">ນາມສະກຸນ</label>
                    <input type="text" name="last_name" class="form-control" id="exampleInputPassword1" required placeholder="ກະລຸນາປ້ອນນາມສະກຸນ">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ເພດ</label><br>
                    <select name="gender" id="" class="form-control">
                        <option value="">-- ກະລຸນາເລືອກ --</option>
                        <option value="ຊາຍ">ຊາຍ</option>
                        <option value="ຍິງ">ຍິງ</option>
                        <option value="ອື່ນໆ">ອື່ນໆ</option>
                    </select>
                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="form-group">
                    <label for="exampleInputPassword1">ວັນເດືອນປີເກີດ</label>
                    <input type="text" name="birthday" class="form-control" id="birthday" placeholder="YYY-MM-DD">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ອີເມວ</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" required placeholder="ອີເມວ">
                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="form-group">
                    <label for="exampleInputPassword1">ລະຫັດຜ່ານ</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required placeholder="*******">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ອາຍຸ</label>
                    <input type="number" name="age" class="form-control" id="exampleInputEmail1" required placeholder="ປ້ອນອາຍຸ">
                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="form-group">
                    <label for="exampleInputPassword1">ແຂວງ</label>
                    <select name="province" id="" class="form-control">
                      <option value="">-- ກະລຸນາເລືອກ --</option>
                      <option value="ອັດຕະປື">ອັດຕະປື</option>
                      <option value="ບໍ່ແກ້ວ">ບໍ່ແກ້ວ</option>
                      <option value="ບໍລິຄຳໄຊ">ບໍລິຄຳໄຊ</option>
                      <option value="ຈຳປາສັກ">ຈຳປາສັກ</option>
                      <option value="ຫົວພັນ">ຫົວພັນ</option>
                      <option value="ຄຳມ່ວນ">ຄຳມ່ວນ</option>
                      <option value="ຫຼວງນ້ຳທາ">ຫຼວງນ້ຳທາ</option>
                      <option value="ຫຼວງພະບາງ">ຫຼວງພະບາງ</option>
                      <option value="ອຸດົມໄຊ">ອຸດົມໄຊ</option>
                      <option value="ຜົ້ງສາລີ">ຜົ້ງສາລີ</option>
                      <option value="ໄຊຍະບູລີ">ໄຊຍະບູລີ</option>
                      <option value="ສາລະວັນ">ສາລະວັນ</option>
                      <option value="ສະຫວັນນະເຂດ">ສະຫວັນນະເຂດ</option>
                      <option value="ເຊກອງ">ເຊກອງ</option>
                      <option value="ນະຄອນຫຼວງວຽງຈັນ">ນະຄອນຫຼວງວຽງຈັນ</option>
                      <option value="ວຽງຈັນ">ວຽງຈັນ</option>
                      <option value="ຊຽງຂວາງ">ຊຽງຂວາງ</option>
                      <option value="ໄຊສົມບູນ">ໄຊສົມບູນ</option>
                    </select>
                  </div>
                  </div>
                   <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ເມືອງ</label>
                    <input type="text" name="district" class="form-control" id="exampleInputEmail1" required placeholder="ປ້ອນເມືອງ">
                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">ທີ່ຢູ່ ບ້ານ</label>
                    <input type="text" name="village" class="form-control" id="exampleInputPassword1" required placeholder="ປ້ອນບ້ານ">
                  </div>
                  </div>
                    <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ເບີໂທ</label>
                    <input type="text" name="u_phone" class="form-control" id="exampleInputEmail1" required placeholder="ປ້ອນເບີໂທ">
                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="form-group">
                    <label for="exampleInputPassword1">ຊື່ພໍ່</label>
                    <input type="text" name="f_name" class="form-control" id="exampleInputPassword1" placeholder="ຊື່ພໍ່">
                  </div>
                  </div>
                    <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ເບີໂທພໍ່</label>
                    <input type="text" name="f_phone" class="form-control" id="exampleInputEmail1" placeholder="ປ້ອນເບີໂທພໍ່">
                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="form-group">
                    <label for="exampleInputPassword1">ຊື່ແມ່</label>
                    <input type="text" name="m_name" class="form-control" id="exampleInputPassword1" placeholder="ປ້ອນຊື່ແມ່">
                  </div>
                  </div>
                    <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ເບີໂທແມ່</label>
                    <input type="text" name="m_phone" class="form-control" id="exampleInputEmail1" placeholder="ປ້ອນເບີໂທແມ່">
                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="form-group">
                    <label for="exampleInputPassword1">ມືຖື</label>
                    <input type="text" name="mobile_phone" class="form-control" id="exampleInputPassword1" required placeholder="ປ້ອນມືຖື">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ຈຳນວນເງິນ</label>
                    <input type="number" name="income" class="form-control" id="exampleInputEmail1" placeholder="ປ້ອນຈຳນວນເງິນ">
                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="form-group">
                    <label for="exampleInputPassword1">ຄ່າຮຽນ</label>
                    <input type="text" name="in_reason" class="form-control" id="exampleInputPassword1" required placeholder="ຈ່າຍແລ້ວ ຫຼື ຍັງ">
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
                  <th>ຊື່</th>
                  <th>ນາມສະກຸນ</th>
                  <th>ເພດ</th>
                  <th>ວັນເດືອນປີເກີດ</th>
                  <th>ອີເມວ</th>
                  <th>ລະຫັດຜ່ານ</th>
                  <th>ອາຍຸ</th>
                  <th>ທີ່ຢູ່</th>
                  <th>ປຸ່ມຄຳສັ່ງ</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['first_name']; ?></td>
                  <td><?php echo $row['last_name']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><?php echo $row['birthday']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['password']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><?php echo $row['village'].','.$row['district'].','.$row['province']; ?></td>
                  <td><a class="btn btn-warning" href="editstudent.php?id=<?php echo $row['id'];?>"><i class="fas fa-edit"></i></a>&nbsp;<a onclick="confirmDelete(<?php echo $row['id'];?>)" class="btn btn-danger"><i class="fas fa-times"></i></a><a href="viewstudent.php?id=<?php echo $row['id']?>" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
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
            window.location.href = 'deletestudent.php?id=' + $id;
        }
    });
}
</script>
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
<!-- Include SweetAlert2 from CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(function() {
    $("#birthday").datepicker({
      dateFormat: 'yy-mm-dd', // Specify the date format
      changeYear: true // Enable the year dropdown
    });
  });
</script>
</body>
</html>