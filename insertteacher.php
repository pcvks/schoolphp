<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<?php
include("./includes/db.php");
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$age = $_POST['age'];
$village = $_POST['village'];
$district = $_POST['district'];
$province = $_POST['province'];
$userphone= $_POST['u_phone'];
$password = $_POST['password'];
$hashPassword = md5($password);
$sql = "INSERT INTO user (first_name, last_name, gender, birthday, email,
                          password, age, village, district, province, u_phone, role) 
                          VALUES ('$firstname','$lastname','$gender','$birthday','$email',
 '$hashPassword','$age','$village','$district','$province','$userphone', 3)";

if(mysqli_query($conn, $sql))
{
    header("Location: teacherform.php?success=true");
    exit(); 
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
?>