<?php include('connect.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="reg.css">
  <style>
    .topbar {
      position: absolute;
      top: 0;
      left: 0;
    }
  </style>
</head>

<body>
  <div class="header">
    <a class="topbar" href="home.php">
      <img src="image/4.logo.PNG" alt="Image" width="100" height="100">
    </a>
    <h2>Register</h2>
  </div>

  <form action="register.php" method="post" class="container">
    <?php include('err.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>" required>
    </div>
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $name; ?>" required>
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>" required>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" required>
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2" required>
    </div>
    <div class="input-group">
      <label>Phone_no</label>
      <input type="tel" name="phone_no" required>
    </div>
    <div class="input-group" id="term">
      <label>Department</label>
      <select name="Department_name" id="user-mode">
        <option value="sci">Science</option>
        <option value="arts">Arts</option>
        <option value="com">Commerce</option>
      </select>
    </div>
    <div class="input-group" id="term">
      <label>Level</label>
      <select name="level" id="user-mode">
        <option value="o">O Level</option>
        <option value="a">A Level</option>
      </select>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>

</html>