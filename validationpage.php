<?php 

$conn = mysqli_connect("localhost", "root","","usermgt");


$email = $_POST['email'];
$password = $_POST['password'];




$sql = "SELECT * FROM usertbl WHERE email = '$email' && password = '$password' ";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) == 1){

	$user = mysqli_fetch_assoc($result);

	session_start();
	$_SESSION['username'] = $user['name'];

header("location: http://localhost/usermgt/homepage.php");

}else{
	
	header("location: http://localhost/usermgt/loginpage.php");
}


?>