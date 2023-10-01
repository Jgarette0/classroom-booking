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
    <div class="div11">
      <div class="div1aa"><img src="images/cctc.png" alt="CCTC"></div>
      <div class="div1baa">Already have an account?  <a href="login.php">Sign in </a> </div>
    </div>
    <div class="div21">
      <form class="login" action="dashboard.php" method="post">
        <div class="div2aa">
          <div>
            <label for="email">Enter your email</label>
            <input type="text" name="email"class="email" id="email">
          </div>
          <div>
            <label for="password">Enter a password</label>
            <input type="password" name="password"class="password" id="password">
          </div>
          <div>
            <label for="password">Enter a username</label>
            <input type="text" name="username"class="username" id="username">
          </div>
          <div>
            <button type="submit" class="submit">
              Create account
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php 
/*
echo $_SERVER["DOCUMENT_ROOT"];
echo $_SERVER["PHP_SELF"];
*/
?>