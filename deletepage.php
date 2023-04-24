<?php 


$conn = mysqli_connect("localhost","root","","usermgt");

$id=$_GET['id'];

$sql = "DELETE FROM usertbl WHERE id='$id'";
$result = mysqli_query($conn,$sql);

header("location: http://localhost/usermgt/homepage.php");

mysqli_close($conn);





?>