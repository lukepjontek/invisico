<header class="desktop-header">
    <a href="index.php">InvisiCo</a>
    <a href="#models">Models</a>
    <a href="#financing">Financing</a>
    <a href="#about">About</a>
    
    <?php 
      if (isset($_SESSION['u_id'])) {
        echo '<a href="reports.php">Reports</a>';
        echo '<h2 style="color: white; float: right; margin-right: 10px;">Welcome ' . $_SESSION['u_first'] . "!";
      }
    ?>
</header>

<header class="mobile-header">
  <div class="dropdown">
    <button class="dropbtn" onclick="drop()">&#9776 InvisiCo</button>
    <div class="dropdown-content" id="dropdown-content">
      <a href="#models">Models</a>
      <a href="#financing">Financing</a>
      <a href="#about">About</a>
    </div>
  </div> 
</header>
