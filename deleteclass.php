<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<?php
include("./includes/db.php");

$id = $_GET['Cid'];

$sql = "DELETE FROM class WHERE Cid=$id";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: classform.php");
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>