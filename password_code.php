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
    <h1 class="sign-up__title">Enter Verification Code</h1>
    <p class="sign-up__subtitle">We have sent a verification code to your email!</p>
    <form class="sign-up-form form" action="password_code_process.php" method="post">
      <label class="form-label-wrapper">
    
        <input class="form-input" type="text" name="code" id="code" placeholder="Enter your code" required>
      </label>
     
      <input type="submit" class="form-btn primary-default-btn transparent-btn" value="Submit">
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