<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>High Morale Dashboard | Sign In</title>
  <!-- Favicon -->

  <!-- Custom styles -->
  <link rel="stylesheet" href="css_admin/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Enter Your Email</h1>
    <p class="sign-up__subtitle">We will send a verification code to your email</p>
    <form class="sign-up-form form" action="password_process.php" method="post">
      <label class="form-label-wrapper">
    
        <input class="form-input" type="text" name="email" id="email" placeholder="Enter your email" required>
      </label>
     
      <input type="submit" class="form-btn primary-default-btn transparent-btn" value="Send Code">
    </form>
  </article>
  <br>

</main>

<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>