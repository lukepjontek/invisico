<footer>
  <?php echo "Copyright &copy " . date("Y"); ?>
  <br>
  <p> Disclaimer: This is a fictitious website; please do not contact us with legitimate business offers, sorry Shark Tank ;)</p>
  <a href="https://twitter.com/Invisico1?lang=en"><img src="/images/social-twitter.png" style="width: 25px; height: 25px;"></a>
  <a href="https://www.youtube.com/channel/UC-gYsbVy-jjKnV7YIx0ylQA/featured"><img src="/images/social-youtube.png" style="width: 25px; height: 25px;"></a>
  <?php
    if (isset($_SESSION['u_id'])) {
          echo '<form class="logout-btn" action="inc/logout.inc.php" method="POST">
            <button type="submit" name="submit"><b>Logout</b></button>
            </form>';
    } else {
      echo '<a href="sign-in.php"><b>Employee login</b></a>';
    }
  ?>
  
  
</footer>
