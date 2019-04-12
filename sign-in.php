<!DOCTYPE html>
<html>
<head>
  <title>InvisiCo - Sign In</title>
  <link rel="shortcut icon" href="/images/tab-icon.ico" />
    
  <meta name="author" content="Jack and Luke">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A Coding II project on a fictional invisible car brand">
  <meta name="keywords" content="cars, invisible, fast, slow, fuel efficent, cheap, expensive, military use">
  
  <link href="/styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet"> 
  
  <!-- Link to Javascript file -->
  <script src="script.js"></script>
  
  <?php 
  session_start();
  ?>

  
</head>

<body>
  
  <?php include("inc/sign-in-header.php"); ?>  
  
  <div class="main">
    <h1>Welcome Employee!</h1>
    
    <div class="login">
      
      <h3>Please sign in to continue.</h3>
      <br>
      
      <?php 
        if (isset($_SESSION['u_id'])) {
          echo '<form action="inc/logout.inc.php" method="POST">
            <button type="submit" name="submit">Logout</button>
            </form>';
        } else {
          echo '<form action = "inc/login.inc.php" method ="POST">
            <input type="text" name="uid" placeholder="Username/e-mail">
            <br><br><br><br>
            <input type="password" name="pwd" placeholder="Password">
            <br><br><br><br>
            <button name="submit" type="submit">Sign In</button>
            <br><br>
            </form>';
        }
      ?>
      
      <p class="forgot-pass"><a href="#" onclick="tooBad()">Forgot password?</a></p>
      <i><p id="tooBad"></p></i>
    
    </div>
  
  </div>
  
</body>