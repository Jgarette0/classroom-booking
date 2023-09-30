<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLASSROOM INTEGRATION SYSTEM</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/responsive.css">
  <script src="login.js" ></script>
</head>
<body>
  
  <form class="login" action="dashboard.php" method="post">

  <div class="form-top">
    <div class="form-top-header">
      LOGIN
    </div>
  </div>
      <center class="centered-content" id="fullname-content">
      <?php include 'includes/registrationhandler.php'; ?>
    </center>
  <div class="form-middle">
      <div>
        <label for="username">Username : 
          <input type="text" class="username"  placeholder="Enter your username" required>
        </label> 
    </div>
    <div>
      <label for="password">Password : 
        <input type="password" class="password" placeholder="Enter your password" required>
      </label>
    </div>
  </div>
  <div class="form-bottom">
    <div>
      <button type="submit" class="submit">
        Login
      </button>
    </div>
  </div>
  <div class="register-link">
    Don't have an account? <a href="registration.html">Register here</a>
</div>
  </form>
</body>
</html>