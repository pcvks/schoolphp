<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<?php
include("./includes/db.php");

$sub_name = $_POST['sub_name'];
$first_name = $_POST['first_name']; // Retrieve the teacher's first name from the form

$sql = "INSERT INTO subject (sub_name, teacher_id) 
        SELECT '$sub_name', u.id
        FROM user u
        WHERE u.first_name = '$first_name'";

if(mysqli_query($conn, $sql)) {
    header("Location: subjectform.php?success=true");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
?>