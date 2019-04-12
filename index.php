<!DOCTYPE html>
<html>
<head>
  <title>InvisiCo</title>
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
 
  <?php include("inc/header.php"); ?>  
  
  <br>
  
  <!-- Scroll to top button -->
  <button onclick="topFunction()" id="top-button" title="Back to top"><b>Top</b></button>
  
  <div id="home" class="main">

    <div class="slideshow">
      
      <div class="slide">
        <div class="numbertext">1 / 3</div>
        <img src="/images/mainslide.jpg" style="width: 100%;">
        <div class="text" style="color: white;">Known by all, seen by few...</div>
      </div>
      
      <div class="slide">
        <div class="numbertext">2 / 3</div>
        <img src="/images/stealthcraft1.jpg" style="width: 100%;">
        <div class="text">Bet you didn't see this coming...</div>
      </div>
      
      <div class="slide">
        <div class="numbertext">3 / 3</div>
        <img src="/images/kachow1.png" style="width: 100%;">
        <div class="text">Up to 12/15 MPG city/highway!</div>
      </div>
      
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      } 
  </script>
  
    </div>
    
  </div>
  
  <br><br>
  
  <div id="models" class="main">
    <h1>Models</h1>
    <?php include("inc/models.php"); ?>
  </div>

  <br><br>
  
  <div id="financing" class="main">
    <h1>Financing</h1>
    
    <div class="row">
      <div class="column">
        <h3 >Finance through us!</h3>
        <p >InvisiCo is happy to announce that we now offer direct financing through us! Take out a loan with us at our astoundingly low interest rates. We offer financing to individuals of all financial situations-no credit checks required! Check out our average loan terms and rates that we offer!</p>
        <p>Find a vehicle that catches your eye(or maybe not)? Feel free to use our financing calculator below to estimate monthly payments.</p>
      </div>
      <div class="column">
        <h3>Average Loan Term and Rates</h3>
        <table id="loan-table">
          <tr>
            <th>Loan Term</th>
            <th>Interest Rate </th>
          </tr>
          <tr>
            <td>12 Months</td>
            <td>5.15%</td>
          </tr>
          <tr>
            <td>24 Months</td>
            <td>13.33%</td>
          </tr>
          <tr>
            <td>36 Months</td>
            <td>43.02%</td>
          </tr>
          <tr>
            <td>48 Months</td>
            <td>51.87%</td>
          </tr>
          <tr>
            <td>60 Months</td>
            <td>70.24%</td>
          </tr>
        </table>
      </div>
    </div>
    
    <br>
    
    <?php include ("inc/calculator.php"); ?>
      
  </div>  

  <br><br> 
 
  <div id="about" class="main">
    <h1>About</h1>
    <h3>Our Company</h3>
    <p>
     We here at InvisiCo take pride in offering some of the most technologically advanced vehicles on the market. Our vehicles range from common, everyday cars to more advanced vehicles
     intended for military use. However, due to our amazing and dedicated legal team, there are no restrictions on what you can purchase from us. If you've lost all sense of reality and
     just want to spend several million dollars on an M1 Abrams with cloaking capabilities, go right ahead-<b>no military identification required.</b> Knowing that with us money can buy anything, 
     government law DOES restrict whether or not you can legally <b>operate</b> our products. You will be happy to know that regardless pf the vehicle you by from us, the sense of security will come
     with it as there are no reported cases of theft with our vehicles!
    </p>
    <div class="pics">
      <img src="/images/factory.jpg">
      <img src="/images/military.JPG">
    </div>
    <h3>Story</h3>
    <p>
      Our idea for this company was the result of a magical and elightening journey. As the two founders wandered through the Sonoran desert on a peyote fueled spirit-quest, The two men
      heard a voice, a voice that called from the desert wind itself, "You must go forth and construct machines that can become invisible to the eyes." The voice also said "Those idiots at 
      Toyota don't know what they're doing." according to one of the founders. 
      As the two emerged from the harsh desert they began their work almost immediately. One of them focused on acquiring an actual property in which to sell the vehicles while the other
      "acquired" several cloaking prototypes from DARPA. Together, they worked hard to provide the best for all of their customers and eventually, InvisiCo became what it is today.
    </p>
    <div class="pics">
      <img src="/images/distress.JPG">
      <img src="/images/agreement.jpg">
    </div>
  </div>
  
  <br><br>
  
  <?php include("inc/footer.php"); ?>
    
</body>
 
</html>

    
