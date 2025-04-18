<?php include('connect.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>Login - Your Website Name</title>
  <style>
    .topbar {
    position: absolute;
    top: 0;
    left: 0;
  }
  </style>
</head>

<body>


<div class="topbar">
<a href="home.php">
<img src="image/4.logo.PNG" alt="Image" width="100" height="100">
</a>
</div>

  <div class="container">
    <div class="header">
      <h2>Login</h2>
    </div>

    <form action="loginto.php" method="post">
      <?php include('err.php'); ?>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="input-group">
        <label for="user-mode">User Mode</label>
        <select id="user-mode" name="user">
          <option value="Student">Student</option>
          <option value="Teacher">Teacher</option>
          <option value="Admin">Admin</option>
        </select>
      </div>
      <button type="submit" id="submit-btn" name="login_user">Login</button>
      <p id="account-exists">Not yet a member? <a href="reg.php">Sign up</a></p>
    </form>
  </div>
</body>

</html>