<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<?php
include("./includes/db.php");

$id = $_GET['sub_Id'];

$sql = "DELETE FROM subject WHERE sub_Id=$id";
$result = mysqli_query($conn, $sql);

if($result){
    
    header("Location: subjectform.php");
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>