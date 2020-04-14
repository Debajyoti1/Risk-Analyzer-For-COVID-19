<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Risk Analyzer</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check">
          <i class="fas fa-bars" id="btn"></i>
          <i class="fas fa-times" id="cancel"></i>
        </label>
        <img src="gg.png" alt="covid19 risk checker">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Map</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">how to use</a></li>
        </ul>
      </nav>

	  
	  <div class="page-content">
		  
		  
		  <div class="heading_1">
			  <h1>Welcome to Risk Analyzer for  <span style="color: orange"> COVID 19</span></h1>
		  </div>
		  
      	  <div class="ureja">
          <h2><span style="color: coral">9</span><span style="color: coral">1</span><span>D</span><span>I</span><span>V</span><span>O</span><span>C</span></h2>
          </div>
		  
		  <div class="info_1">
			  <h3>Check COVID19 in yourself</h3>
		  </div>
		  
		  <div class="button_front">
		  <h4><a href="personal.php">Start</a></h4>
	      </div>
		  
		  
    </div>

	  
    <footer>
      <div class="footer-container">
        <div class="left-col">
          <img src="gg.png" alt="" class="logo">
          <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p class="rights-text">©dueldutta | All Rights Reserved.</p>
        </div>

        <div class="right-col">
          <h1>COVID19 Updates</h1>
          <p>&nbsp;</p>
          <div class="border"></div>
          <p>&nbsp;</p>
          <p>Get the letest news of COVID19.</p>
          <p>&nbsp;</p>
          <form action="" class="covid19-form">
            <input type="text" class="txtb" placeholder="Enter Your Email">
            <input type="submit" class="btn" value="submit">
          </form>
        </div>
      </div>
    </footer>
	  
	  
  </body>
</html>
