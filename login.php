<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLASSROOM INTEGRATION SYSTEM</title>
  <link rel="stylesheet" href="css/user.css">
  <link rel="stylesheet" href="css/responsive.css">
  <script src="login.js" ></script>
</head>
<body>
  <div class="login-container">
    <div class="div1">
      <div class="div1a"><img src="images/cctc.png" alt="CCTC"></div>
      <div class="div1b">Sign in to CCTC-Guide</div>
    </div>
    <div class="div2">
      <form class="login" action="dashboard.php" method="post">
        <div class="div2a">
          <div>
            <label for="email">Email</label>
            <input type="text" name="email"class="email" id="email">
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" name="password"class="password" id="password">
          </div>
          <div>
            <button type="submit" class="submit">
              Sign in
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="div3">
        <div>
          New to CCTC-guide? <a class="create-account" href="registration.php">Create an account</a>
        </div>
    </div>
  </div>
</body>
</html>