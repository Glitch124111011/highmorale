<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>High Morale Dashboard | Sign In</title>
  <!-- Favicon -->
  <link rel = "icon" href = "images/logo3.png" type = "image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css_admin/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Welcome!</h1>
    <p class="sign-up__subtitle">Sign in to your account to continue</p>
    <form class="sign-up-form form" action="signin_process.php" method="post">
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email" name="email" id="email" placeholder="Enter your email" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" name="password" id="password" placeholder="Enter your password" required>
      </label>
      <a class="link-info forget-link" href="password.php">Forgot your password?</a>
      <br>
      <input type="submit" class="form-btn primary-default-btn transparent-btn" value="Sign in">
    </form>
    <span>Don't have an Account yet? </span><a class="link-info forget-link" href="signup.php">Sign up here</a>
  </article>
  <br>
  <center><a href="index.php" style="background-color:white;border-radius:5px;padding:10px;">HOME</a></center>
</main>

<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>