<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Accounts</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Type</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'db_connect.php';
            $sql="SELECT * FROM tbend_users WHERE verified = 'Y'";
            $result = mysqli_query($db_connection, $sql);
            $row = mysqli_fetch_assoc($result);
            while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["user_type"]. "</td><td>" . $row["firstname"] . "</td><td>"
          . $row["lastname"]. "</td><td>".$row["user_email"]."</td><td>".$row["gender"]."</td></tr>";
            }
            
          ?>
  </tbody>
</table>

<a href="index.html"><button>Home</button>
</body>
</html>