<?php 

$conn = mysqli_connect("localhost", "root","","usermgt");

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];



$sql = "SELECT * FROM usertbl WHERE email = '$email'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) == 1){

	echo "this Email alrady takne";
	
}else{

$reg = "INSERT INTO usertbl (id,email,password,name,phone) VALUES ('$id','$email','$password','$name','$phone')";

	mysqli_query($conn,$reg);

	header("location: http://localhost/usermgt/loginpage.php");

}



?>