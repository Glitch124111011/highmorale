<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>High Morale Dashboard | Sign Up</title>
  <!-- Favicon -->
 
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css_admin/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Get started</h1>
    <p class="sign-up__subtitle">Start managing High Morale website for you customers</p>
    <form class="sign-up-form form" action="signup_process.php" method="post">
      <label class="form-label-wrapper">
        <p class="form-label">Firstname</p>
        <input class="form-input" type="text" name="firstname" placeholder="Enter your first name" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">lastname</p>
        <input class="form-input" type="text" name="lastname" placeholder="Enter your last name" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Street</p>
        <input class="form-input" type="text" name="street" placeholder="Enter your street" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">City</p>
        <input class="form-input" type="text" name="city" placeholder="Enter your city" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Province</p>
        <input class="form-input" type="text" name="province" placeholder="Enter your province" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email"  name="email" placeholder="Enter your email" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" name="password" minlength="8" placeholder="Enter your password" required>
      </label>
      <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox" >
        <span class="form-checkbox-label">Remember me next time</span>
      </label>
      <input type="submit" class="form-btn primary-default-btn transparent-btn" value="Sign in">
    </form>
    <span>Already have an account? </span><a class="link-info forget-link" href="signin.php">Sign in here</a>
  </article>
</main>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>