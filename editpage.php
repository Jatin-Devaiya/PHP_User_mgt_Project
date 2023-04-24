<?php 

$conn = mysqli_connect("localhost","root","","usermgt");

#$uid = (isset($_REQUEST['id'])) ?  $_REQUEST['id'] : '';

$uid = $_GET['id'];

$sql = "SELECT * FROM usertbl WHERE id = '$uid' ";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0 ){

	while ($row = mysqli_fetch_assoc($result)) {

?>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
  <h1>Update Here:</h1>
  
</div> 
<form action="updatepage.php" method="post">
  <div class="form-group">
   
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email"  id="email" name="email" value="<?php echo $row['email']; ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password"  id="pwd" name="password" value="<?php echo $row['password']; ?>" >
  </div>
  <div class="form-group">
    <label for="email">Name</label>
    <input type="taxt"  id="email" name="name" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="email">Phone</label>
    <input type="taxt"  id="email" name="phone" value="<?php echo $row['phone']; ?>" >
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
	}

}

?>