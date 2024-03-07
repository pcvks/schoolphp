<?php
include("./includes/common.php");
checkLoggedIn(); // Check if the user is logged in
?>
<?php
include("./includes/db.php");
$s_score = $_POST['s_score'];
$grade = $_POST['grade'];
if($s_score >= 91)
{
    $grade = "A";
}else if($s_score >=86){
    $grade = "B+";
}else if($s_score >=80){
    $grade = "B";
}else if($s_score >=71){
    $grade = "C+";
}else if($s_score >=61){
    $grade = "C";
}else if($s_score >=56){
    $grade = "D+";
}else if($s_score >=50){
    $grade = "D";
}else{
    $grade = "F";
}
$sql = "INSERT INTO score ( s_score, grade) 
                          VALUES ('$s_score','$grade')";

if(mysqli_query($conn, $sql))
{
    header("Location: scoreform.php?success=true");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
?>