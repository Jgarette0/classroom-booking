<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CLASSROOM</title>
      <link rel="stylesheet" href="accounts/user.css">
      <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
      <div class="header-div">
        <div class="logo-container">
          <img src="images/cctc.png" alt="CCTC">
        </div>
        <div class="login-link-container">Already have an account?  
          <a href="login.php">Login </a>
        </div>
      </div>
      <div class="form-div">
        <form class="login-form" 
              action="includes/formhandler.inc.php" 
              method="post">
          <div class="inputs-container">
            <div>
              <label for="email">Enter your email</label>
              <input type="text" name="email"class="email" id="email" placeholder="cctc-guide@gmail.com">
            </div>
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
                <input type="password" name="password"class="password" id="password" placeholder="Password">
              </div>
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
              <input type="text" name="username"class="username" id="username" placeholder="Username">
            </div>
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/hbvyhtse.json"
              trigger="hover"
              colors="primary:#273981"
              style="width:24px;height:24px; margin-top:-45px; margin-left:2px">
            </lord-icon>
            <div>
              <button type="submit" class="submit">
                Create account
              </button>
            </div>
          </div>
        </form>
      </div>
<div class="category-div">
    <div>
        <a href="">Terms</a>
    </div>
    <div>
        <a href="">Privacy</a>
    </div>
    <div>
        <a href="">Docs</a>
    </div>
    <div>Contact CCTC-guide support</div>
</div>
<div class="login-container">
      <div class="login-header-div">
        <div class="logo-header-container">
          <img src="images/cctc.png" alt="CCTC">
        </div>
        <div class="logo-header-description">
          Login to CCTC-Guide
        </div>
      </div>
      <div class="login-form-div">
        <form class="login" action="dashboard.php" method="post">
          <div class="login-input-container">
            <div>
              <label for="email">
                Email
              </label>
              <input 
              type="text" 
              name="email"
              class="email" 
              id="email">
            </div>
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/hbvyhtse.json"
              trigger="hover"
              colors="primary:#273981"
              style="width:24px;height:24px; margin-top:-45px; margin-left:2px">
            </lord-icon>
            <div class="password-inputs">
              <div class="password-div">
                <label for="password">
                  Password
                </label>
                <input 
                type="password" 
                name="password"
                class="password" 
                id="password">
              </div>
              <div>
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                  <lord-icon
                    src="https://cdn.lordicon.com/alnsmmtf.json"
                    trigger="click"
                    colors="primary:#273981,secondary:#273981"
                    stroke="150"
                    id="show-password"
                    style="width:30px;height:30px;margin-left:-30px; margin-bottom:-22px;">
                  </lord-icon>
              </div>
            </div>
            <div>
              <button type="submit" class="submit">
              Login
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="login-terms-div">
        <div>
          New to CCTC-guide? 
          <a class="create-account" 
            href="registration.php">
            Create an account
          </a>
        </div>
        </div>
      </div>
      <div class="terms-container-div">
        <div><p>
        By creating an account, you agree to the <a href="#">Classroom Vacancy Detection Terms of Use</a>. For more details on how we handle your data, please review our <a href="#">Privacy Policy</a>. We'll send you occasional account-related notifications.
        </p></div>
      </div>
    <script src="accounts/user.js" ></script>
    </body>
  </html>
