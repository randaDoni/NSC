<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" />

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="main" style="background-color:#10203F;">
      <!-- Sing in  Form -->
      <section class="sign-in">
        <div class="container">
          <div class="signin-content">
            <div class="signin-image">
              <figure><img src="assets/img/logos/tubes.png" alt="sing up image" /></figure>
              <a href="/register" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
              <h2 class="form-title">Sign in</h2>
              <form method="POST" class="register-form" action="{{route('post.login')}}" id="login-form">
                @csrf
                <div class="form-group">
                  <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                  <input type="text" name="email" id="your_name" placeholder="Your Name" />
                </div>
                <div class="form-group">
                  <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                  <input type="password" name="password" id="your_pass" placeholder="Password" />
                </div>
                <div class="form-group">
                  <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                  <label for="remember-me" class="label-agree-term"
                    ><span><span></span></span>Remember me</label
                  >
                </div>
                <div class="form-group form-button">
                  <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                </div>
              </form>
              <div class="social-login">
                <span class="social-label">Or login with</span>
                <ul class="socials">
                  <li>
                    <a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- JS -->
    <script src="vendors/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
