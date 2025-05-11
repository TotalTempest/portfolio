<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<body>
<nav>
  <a href="index.php">Home</a>
</nav>

<div class = "create_account">
<h1>Create an account</h1>

<form action="create_account.php" method="post">
  <label>User Name<input type="text" name="user" required autofocus> </label><br>
  <label>Email<input type="email" name="email" required></label><br>
  <label>Password<input type="password" name="password1"></label><br>
  <label>Retype Password<input type="password" name="password2"></label><br>
  <input type="submit" name="submit" value="Create">

  <?php
  //https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database

  require_once('functions.php');

  //Make sure everything is filled
  if (isset($_POST['submit'])) {
    if ($_POST['password1'] == $_POST['password2']){
      insertUserRecord($_POST['user'],$_POST['email'],$_POST['password1']);
      header("location: index.php");
      exit();
    }
    else {
      print("<h4>PASSWORDS DO NOT MATCH</h4>");
    }
  }
  ?>
  
</form>
</div>

</body>
</html>