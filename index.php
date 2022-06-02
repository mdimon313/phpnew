<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in | Tryst.link: Find independent escorts</title>

    <!-- fontawesome -->
    <link rel="stylesheet" href="./assets/style/all.min.css" />
    <link rel="stylesheet" href="./assets/style/fontawesome.min.css" />

    <link rel="stylesheet" href="./assets/style/bootstrap.min.css">

    <!-- custom style link -->
    <link rel="stylesheet" href="./assets/style/style.css" />
  </head>
  <body>
    <!-- header start -->
    <header class="header">
      <nav>
        <div class="h-logo">
          <a href=""
            ><img src="./assets/img/logo.png" alt="tryst link logo"
          /></a>
        </div>

        <!-- Main menu -->
        <ul>
          <li class="dropdown" onclick="showDropdown()">
            <i class="fas fa-bars" id="menubar"></i> Menu

            <!-- dropdown list -->
            <ul id="dropdown">
              <li><img src="./assets/img/responsive logo.png" width="100" alt=""> <span><i class="fas fa-times"></i></span></li>
              <li><a href="#">Home</a></li>
              <li><a href="#">Browse escorts</a></li>
              <li><a href="#">Sign up</a></li>
              <li><a href="#">Log in</a></li>
              <li><a href="#">Membership & Pricing</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <!-- dropdown list end -->
          </li>
          <li class="acnt" ><a href="#">Sign up</a></li>
          <li class="acnt" ><a href="#">Log in</a></li>
        </ul>
      </nav>
    </header>
    <!-- header end -->

    <!-- login section start -->
    <section class="main">
      <div class="container">
        <div class="container_inner_wrapper">
          <div class="login_part">
            <!-- alert part -->
              <?php 
                  if(isset($_SESSION["input_err"])) {?>
                  <div class="alert alert-danger" role="alert">
                   <?= $_SESSION["input_err"];?>
                  </div>
                  
                 <?php } unset($_SESSION["input_err"])?>
            <!-- alert part end -->
            <div class="form_header">
              <h2>Log in</h2>
            </div>

            <!-- alert part -->
              <?php 
                  if(isset($_SESSION["input_err"])) {?>
                  <p>
                    <?= $_SESSION["input_err"];?>
                  </p>

                 <?php } unset($_SESSION["input_err"])?>
            <!-- alert part end -->
            <form action="login_config.php" method="POST">
              <div class="email">
                <abbr title="required">*</abbr>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
              </div>
              <div class="pass">
                <abbr title="required">*</abbr>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
              </div>

              <!-- security verify -->
              <div class="verify">
                <abbr title="required">*</abbr>
                <label for="verify"
                  >Please enter the characters shown inside the blue box</label
                >
                <span id="verify_value"
                  ><img src="captcha_gen.php" alt="captcha"
                /></span>
                <input type="text" name="verify" id="verify" />
                <?php 
                  if(isset($_SESSION["captcha_code_msg"])) {?>
                  <p>
                    <?= $_SESSION["captcha_code_msg"];?>
                  </p>

                 <?php } unset($_SESSION["captcha_code_msg"])?>
              </div>

              <div class="checkbox">
                <input type="checkbox" name="checked" id="checkebox" />
                <label for="checkebox">Remember me for 14 days</label>
              </div>

              <button type="submit" class="btn_login">Log in</button>
              <!-- forgot password and instruction section -->
              <div class="ins">
                <a href="#">Forgot your password</a>
                <a href="#">Didn't receive confirmation instruction?</a>
              </div>
            </form>
          </div>
          <div class="signup_part">
            <div class="sup_header">
              <h2>Sign up</h2>
              <p>
                <i class="fas fa-info-circle"></i>NEW: We are now accepting sign
                ups!
              </p>
            </div>
            <p>
              Tryst.link is one of the fastest-growing escort platforms in the
              world. Built by the same team behind <a href="#">Switter</a>!
            </p>

            <p>
              Please select which type of account you'd like to sign up for:
            </p>

            <!-- type of account -->
            <div class="t_o_account">
              <a href="#">I am a provider</a>
              <a href="#">I am a client</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- login section end -->

    <!-- section 2nd start -->
    <section class="links">
      <div class="container">
        <div class="content_wrapper">
          <div class="link_box">
            <img src="./assets/img/logo alt.png" alt="" />
            <img src="./assets/img/loc.png" alt="" />
            <p style="text-align: center">
              <i class="fas fa-map-marker-alt"></i> Melbourne, Australia
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- section 2nd end -->

    <!-- footer -->
    <footer class="footer">
      <div class="f_content_wrapper">
        <ul>
          <li>&copy; 2020 <a href="">Assembly Four</a></li>
          <li><a href="">Privacy</a></li>
          <li><a href="">Terms & Conditions</a></li>
          <li><a href="">Support</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Social</a></li>
          <li><a href="">Contact</a></li>
        </ul>
        <p>Generated at 2022-06-31T17:37:55+00:00 rev 1567of74f1</p>
      </div>
    </footer>

    <!-- script file links -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script defer>
      function showDropdown() {
        const dropdown = document.getElementById("dropdown");
        const menuBar = document.getElementById("menubar");
        dropdown.classList.toggle("show");
      }
    </script>
  </body>
</html>
