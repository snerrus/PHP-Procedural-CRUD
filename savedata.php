<?php 
$studentname = $_POST['sname'];
$studentaddress = $_POST['saddress'];
$studentclass = $_POST['class'];
$studentphone = $_POST['sphone'];


$conn = mysqli_connect("localhost","root","","crud") or die("Connection failed!");
$query = "INSERT INTO student(sname, saddress,sclass, sphone) VALUES ('{$studentname}','{$studentaddress}','{$studentclass}','{$studentphone}')";
$result = mysqli_query($conn, $query) or die("Query failed!");


header("Location: http://localhost/PHPcrud/index.php");

mysqli_close($conn);

?>