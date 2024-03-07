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
$fathername = $_POST['f_name'];
$fatherphone = $_POST['f_phone'];
$mothername = $_POST['m_name'];
$motherphone = $_POST['m_phone'];
$mobilephone = $_POST['mobile_phone'];
$tuition_fees = $_POST['income'];
$tuition_fees_reason = $_POST['in_reason'];
$password = $_POST['password'];
$hashPassword = md5($password);
$sql = "INSERT INTO user (first_name, last_name, gender, birthday, email,
                          password, age, village, district, province, u_phone,
 f_name, f_phone, m_name, m_phone, mobile_phone, income, in_reason) 
                          VALUES ('$firstname','$lastname','$gender','$birthday','$email',
 '$hashPassword','$age','$village','$district','$province','$userphone','$fathername',
                          '$fatherphone','$mothername','$motherphone','$mobilephone','$tuition_fees','$tuition_fees_reason')";

if(mysqli_query($conn, $sql))
{
    header("Location: studentform.php?success=true");
    exit(); 
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
?>