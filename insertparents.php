<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<?php
include("./includes/db.php");
$email = $_POST['email'];
$password = $_POST['password'];
$fathername = $_POST['f_name'];
$fatherphone = $_POST['f_phone'];
$mothername = $_POST['m_name'];
$sql = "INSERT INTO user (email,
                          password,
 f_name, f_phone, m_name, m_phone, role) 
                          VALUES ('$email',
 '$password','$fathername',
                          '$fatherphone','$mothername','$motherphone',2)";

if(mysqli_query($conn, $sql))
{
    header("Location: parentsform.php?success=true");
    exit(); 
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
?>