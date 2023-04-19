<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="header">
    <h2>Register</h2>
  </div>

  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" id="username" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" id="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Phone Number</label>
      <input type="text" maxlength="10" pattern="\d{10}" id="phnumber" name="phnumber">
    </div>
    <div class=" input-group">
      <label>Password</label>
      <input type="password" id="password_1" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" id="password_2" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" id="register" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>

</html>