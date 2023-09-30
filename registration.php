<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLASSROOM INTEGRATION SYSTEM</title>
  <link rel="stylesheet" href="css/registration.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
  <form class="registration" action="login.php" method="post">
  <div class="form-top">
    <div class="form-top-header">
      CREATE ACCOUNT
    </div>
  </div>
  <div class="form-middle">
      <div>
        <label for="fullname"> Full name:
          <input type="text" class="fullname" id="fullname" name="fullname" placeholder="Enter your full name" required>
        </label>
      </div>
      <div>
        <label for="username">Username : 
          <input type="text" class="username" id="username" name="username" placeholder="Enter your username" required>
        </label> 
    </div>
    <div>
      <label for="password">Password : 
        <input type="password" class="password" id="password" name="password" placeholder="Enter your password" required>
      </label>
    </div>
  </div>
  <div class="form-bottom">
    <div>
      <button type="submit" class="submit">
        Register
      </button>
    </div>
  </div>

  </form>
</body>
</html>
<?php 
/*
echo $_SERVER["DOCUMENT_ROOT"];
echo $_SERVER["PHP_SELF"];
*/
?>