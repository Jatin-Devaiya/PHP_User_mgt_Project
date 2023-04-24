<?php 

$conn = mysqli_connect("localhost","root","","usermgt");

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];

$sql = "UPDATE usertbl SET email='$email', password='$password', name='$name', phone='$phone' WHERE id=$id";
$result = mysqli_query($conn,$sql);

header("location: http://localhost/usermgt/homepage.php");

mysqli_close($conn);


?>