<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CLASSROOM INTEGRATION SYSTEM</title>
      <link rel="stylesheet" href="user.css">
      <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
      <!--this part will be the header part of the registration, 
      which contains the cctc logo and the login link-->
      <div class="header-div">
        <div class="logo-container">
          <img src="../images/cctc.png" alt="CCTC">
        </div>
        <div class="login-link-container">Already have an account?  
          <a href="login.php">Login </a>
        </div>
      </div>
      <!-- THIS IS THE MIDDLE SECTION OF A REGISTRATION FORM -->
      <!-- The action attribute sends the data to a specific URL when the user submits or creates an account. -->
      <!-- This POST method will be used as the HTTP method for sending data to the database later on. -->
      <div class="form-div">
        <form class="login-form" 
              action="../includes/formhandler.inc.php" 
              method="post">
          <div class="inputs-container">
            <div>
              <label for="email">Enter your email</label>
               <!-- Input field for user's email -->
              <input type="text" name="email"class="email" id="email" placeholder="cctc-guide@gmail.com">
            </div>
            <!-- This is an animation icon from https://lordicon.com/ -->
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/ehfubvwr.json"
              trigger="hover"
              colors="primary:#273981"
              style="width:24px;height:24px; margin-top:-45px; margin-left:2px">
            </lord-icon>
            <div class="password-viewer">
              <div>
                <label for="password">Enter a password</label>
                 <!-- Input field for user's password -->
                <input type="password" name="password"class="password" id="password" placeholder="Password">
              </div>
               <!-- This is an animation icon from https://lordicon.com/ -->
              <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
              <div>
                <lord-icon
                  src="https://cdn.lordicon.com/alnsmmtf.json"
                  trigger="click"
                  colors="primary:#273981,secondary:#273981"
                  stroke="150"
                  id="show-password"
                  style="width:30px;height: 32px; margin-left:-30px; margin-bottom:-22px">
                </lord-icon>
              </div>
            </div>
            <div>
              <label for="password">Enter a username</label>
               <!-- Input field for user's username -->
              <input type="text" name="username"class="username" id="username" placeholder="Username">
            </div>
             <!-- This is an animation icon from https://lordicon.com/ -->
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/hbvyhtse.json"
              trigger="hover"
              colors="primary:#273981"
              style="width:24px;height:24px; margin-top:-45px; margin-left:2px">
            </lord-icon>
            <div>
              <!-- Submit button to send the form -->
              <button type="submit" class="submit">
                Create account
              </button>
            </div>
          </div>
        </form>
      </div>
      <!-- CATEGORY DIV SECTION -->
      <!-- This section represents a container for categorized links and text. -->
<div class="category-div">
    <!-- Individual Categories and Links -->
    <!-- Each <div> element within "category-div" represents a category or content section. -->

    <!-- Terms Category Link -->
    <div>
        <a href="">Terms</a>
    </div>

    <!-- Privacy Category Link -->
    <div>
        <a href="">Privacy</a>
    </div>

    <!-- Documentation Category Link -->
    <div>
        <a href="">Docs</a>
    </div>

    <!-- Contact Support Text -->
    <!-- The last <div> contains text for contacting CCTC-guide support. -->
    <div>Contact CCTC-guide support</div>
</div>
      <script src="user.js" ></script>
    </body>
  </html>
