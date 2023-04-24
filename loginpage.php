<!DOCTYPE html>
<html lang="en">
<head>
  <title>loginpage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<div align="center" class="container">
  <h2><b>Login Here:</b></h2>
  </br>
</div>

<div align="center">
<form action="validationpage.php" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email"  id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password"  id="pwd" name="password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</br>

<div align="center" class="container">
  <h2><b>Registration Here:</b></h2>
  </div>

<div align="center">
<form action="registrationpage.php" method="post">
  <div class="form-group">
   
    <input type="hidden" name="id" >
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email"  id="email" name="email" >
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password"  id="pwd" name="password" >
  </div>
  <div class="form-group">
    <label for="email">Name</label>
    <input type="taxt"  id="email" name="name" >
  </div>
  <div class="form-group">
    <label for="email">Phone</label>
    <input type="taxt"  id="email" name="phone" >
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

</body>
</html>
