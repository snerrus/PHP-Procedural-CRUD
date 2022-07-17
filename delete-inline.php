<?php  

echo $stu_id = $_GET['id'];

 include 'config.php'; 
$query = "DELETE FROM student WHERE sid= {$stu_id}";
$result = mysqli_query($conn, $query) or die("Query failed!");

header("Location: http://localhost/PHPcrud/index.php");

mysqli_close($conn);

?>
