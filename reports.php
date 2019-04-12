<!DOCTYPE html>
<html>
<head>
  <title>InvisiCo - Reports</title>
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
  
  <!-- PHP login session, paste into any page that requires a session -->
  <?php 
  session_start();
  ?>
  

</head>
<body>
    <?php include("inc/sign-in-header.php"); ?>
    <div class="main">
      <?php
        if (isset($_SESSION['u_id'])) {
          echo '<h1>Hello ' . $_SESSION['u_first'] . ", view inventory information below.</h1>";
        }
        
        //Connection to Invisico database
        $connection = mysql_connect('localhost', 'root', '');
        mysql_select_db('Invisico');
        
        //mysql_close();
      ?>
      
      <p>Below, you can access all models, colors, and tire options avalible.</p>
      
      <div class="report">
        
        <form method="post">
          <select name="selection">
            <option value="0" selected>Select</option>
            <option value="1">Models</option>
            <option value="2">Colors</option>
            <option value="3">Tires</option>
          </select>
          <button name="submit" value="submit" type="submit">Submit</button>
        </form>
        
        <?php 
          $selectOption = $_POST['selection'];
          
          if ($selectOption == 0) {
            echo "";
          } else if ($selectOption == 1) {
            $sql = "SELECT name FROM models LIMIT 0, 30 ";
            $result = mysql_query($sql);
            
            while($row = mysql_fetch_assoc($result)) {   
              foreach ($row as $col => $val) {
                  echo "<ul><li>" . $val . "</li></ul>";
              }
            }
          } else if ($selectOption == 2) {
            $sql = "SELECT color FROM models LIMIT 0, 30 ";
            $result = mysql_query($sql);
            
            while($row = mysql_fetch_assoc($result)) {   
              foreach ($row as $col => $val) {
                  echo "<ul><li>" . $val . "</li></ul>";
              }
            }
          } else if ($selectOption == 3) {
            $sql = "SELECT tires FROM models LIMIT 0, 30 ";
            $result = mysql_query($sql);
            
            while($row = mysql_fetch_assoc($result)) {   
              foreach ($row as $col => $val) {
                  echo "<ul><li>" . $val . "</li></ul>";
              }
            }
          }
        ?>
        
      </div>  
      
    </div>
    
  
</body>
</html>