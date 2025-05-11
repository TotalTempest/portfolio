<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<body>
<nav>
  <a href="index.php">Home</a>
</nav>
<div class = "sign_in">
<h1>Sign In</h1>

<form action="sign_in.php" method="post">
    <label>E-mail <input type="email" name="email" required autofocus></label>
    <br>
    <label>Password <input type="password" name="password" required></label>
    <br>
    <input type="submit" name="submit" value="Sign In">

    <?php 
    require_once('functions.php');
    if (isset($_POST['submit'])) {
      $signin = getUserRecord($_POST['email'],$_POST['password']);
        if ($signin == true){
          //$_SESSION["username"] = $_POST['username'];
          $_SESSION["email"] = $_POST['email'];
          $_SESSION["password"] = $_POST['password'];
          redirect('index.php');
          exit();
        }
        else {
          print("<h4>Email and Password combination is invalid.</h4>");
        }
    } 
  ?>
</form>
</div>

</body>
</html>

<?php
  // Redirect Workaround Function
  // https://stackoverflow.com/questions/8689471/alternative-to-header-for-re-directs-in-php
  function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
?>