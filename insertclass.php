<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<?php
include("./includes/db.php");
$classname = $_POST['classname'];
$subject_id = $_POST['subject_id'];
$teacher_id = $_POST['teacher_id'];
$sql = "INSERT INTO class (classname, subject_id, teacher_id) 
SELECT '$classname', subject.sub_Id, user.id 
FROM subject 
JOIN user ON subject.teacher_id = user.id 
WHERE subject.sub_name = '$subject_id'";

if(mysqli_query($conn, $sql))
{
    header("Location: classform.php?success=true");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
?>