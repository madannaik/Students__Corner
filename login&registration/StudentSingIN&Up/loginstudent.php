<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َLogin as Student</title>
    <link rel="stylesheet" href="../CSS/stylelogin.css">
  </head>
  <body>

<form class="box" action="index.html" method="post">
  <h1>Login</h1>
  <input type="text" name="" placeholder="Email">
  <?php
  $error = "";
  ?>
  <p><?php echo $error ?></p>
  <input type="password" name="" placeholder="Password">
 <input type="submit" name="" value="Login">
 <h5>Don't have an account? <a href="registrationstudent.php">Sign in here</a> </h5>
</form>


  </body>
</html>
