<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<h1 align="right">Welcome <?php echo  $_SESSION['username']; ?></h1>
	<h2 align="right"><a href="logoutpage.php">Logout</a></h2>

<div class="container">
  <h2>All Records </h2>

  <?php 
$conn = mysqli_connect("localhost", "root","","usermgt");


$sql = "SELECT * FROM usertbl";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0 ){


?>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>email</th>
        <th>password</th>
        <th>name</th>
        <th>phone</th>
        <th>action</th>

       </tr>
    </thead>

    <?php 
    while ($row = mysqli_fetch_assoc($result)) {

    ?>

    <tbody>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td>
        	 <!--<a href="editpage.php?id =<?php echo $row['id']; ?>">Edit</a> this id after space is wrong-->

        <!-- <a href='editpage.php?id=<?php echo $row['id']; ?>'>Edit</a> this is alsow right -->
         <a href="editpage.php?id=<?php echo $row['id']; ?>">Edit</a> 

        	<a href="deletepage.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
      </tr>
     
    </tbody>

<?php } ?>

  </table>
<?php } ?>
</div>

</body>
</html>
