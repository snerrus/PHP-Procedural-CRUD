<?php 
$studentId = $_POST['sid'];
$studentname = $_POST['sname'];
$studentaddress = $_POST['saddress'];
$studentclass = $_POST['sclass'];
$studentphone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection failed!");
$query = "UPDATE student SET sname ='{$studentname}',saddress = '{$studentaddress}',sclass = '{$studentclass}',sphone = '{$studentphone}' WHERE sid= {$studentId}";
$result = mysqli_query($conn, $query) or die("Query failed!");


header("Location: http://localhost/PHPcrud/index.php");

mysqli_close($conn);

?>