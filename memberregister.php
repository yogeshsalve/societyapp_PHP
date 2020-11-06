<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- first container block -->
<div class="container">
  hello
</div>
<!-- first container block -->



<div class="container mx-auto">
  <div class="header">
  	<h2>Member Registration</h2>
  </div>
	
  <form method="post" action="memberregister.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>

    <div class="input-group">
      <label>Name</label>
      <input type="text" name="member_name">
    </div>
    <div class="input-group">
      <label>Flat No</label>
      <input type="text" name="flat_no">
    </div>

     <div class="input-group">
      <label>Contact No</label>
      <input type="number" name="contact_no">
    </div>
    <div class="input-group">
      <label>No of Vehicles</label>
      <input type="number" name="no_of_veh">
    </div>


     
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="memberlogin.php">Sign in</a>
  	</p>
   
  </form>
  </div>
</body>
</html>