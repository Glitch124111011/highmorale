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
<?php

include 'db_connect2.php';
session_start();
if (isset($_SESSION['id'])) {
$id = $_SESSION['id'];

}else{
  header("location:signin.php");
  exit();
} ?> 
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Add New Category</h1>
    <p class="sign-up__subtitle"></p>
    <form class="sign-up-form form" action="category_process.php" method="post">
      <label class="form-label-wrapper">
    
        <input class="form-input" type="text" name="cat" id="cat" placeholder="Enter your category" required>
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