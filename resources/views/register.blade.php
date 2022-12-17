<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" />

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
  <div class="main" style="background-color:#10203F;">
    <!-- Sign up form -->
    <section class="signup">
      <div class="container">
        <div class="signup-content">
          <div class="signup-form">
            <h2 class="form-title">Sign up</h2>
            <form method="POST" action="" class="register-form" id="register-form">
                @csrf
              <div class="form-group">
                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" name="name" id="name" placeholder="Your Name" value="{{old('name')}}" />
                @error('name')
                    <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="email"><i class="zmdi zmdi-email"></i></label>
                <input type="email" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" />
                @error('email')
                    <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                <input type="password" name="password" id="password" placeholder="Password"  value="{{old('password')}}"/>
                @error('password')
                    <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password"value="{{old('password_confirmation')}}" />
                @error('password_confirmation')
                <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group form-button">
                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
              </div>
            </form>
          </div>
          <div class="signup-image">
            <figure><img src="assets/img/logos/tubes.png" alt="sing up image" /></figure>
            <a href="/login" class="signup-image-link">I am already member</a>
          </div>
        </div>
      </div>
    </section>
<!-- JS -->
<script src="vendors/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>










