<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<?php
include("./includes/db.php");
$expenditure = $_POST['expenditure'];
$ex_reason = $_POST['ex_reason'];
$sql = "INSERT INTO user ( expenditure, ex_reason) 
                          VALUES ('$expenditure','$ex_reason')";

if(mysqli_query($conn, $sql))
{
    header("Location: expenditureform.php?success=true");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
?>