<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Risk Analyzer</title>
    <link rel="stylesheet" href="css/style_personal.css">
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
	  
	  <!...........................................................................................................!>
	<div class="heading_1">  
<h1>Enter your Personal Info</h1>
	  </div>
	  
	  
<div>
<form class="box"action="/family.php" method="POST">
    <input type="text" name="Name" placeholder="Enter your Name" required><br>
    <input type="text" name="Age" placeholder="Enter your Age" required><br>
    <input type="text" name="Phone" placeholder="Phone(optional)" ><br>
<!...........................................................................!>	
<div class="info_1"	>
	<h3>Tick on your gender catagory</h3>
	</div>
	
	
<!...........................................................................!>
	
	<div class="radios-boxes">
  <div class="radios">
    <input type="radio" name="gender" id="male" class="radio" value="male">
    <input type="radio" name="gender" id="female" class="radio" value="female">
    <input type="radio" name="gender" id="other" class="radio" value="other">
    <div class="ball"></div>
  </div>
  <div class="labels">
    <label for="radio1" class="label">Male</label>
    <label for="radio2" class="label">Female</label>
    <label for="radio3" class="label">Other</label>
  </div>
</div>
<script>
    
    let radios = document.querySelectorAll('.radio');
let labels = document.querySelectorAll('.label');
let ball = document.querySelector('.ball');
let prevRadio, prevLabel;
radios.forEach((radio, index) => {
  radio.addEventListener('click', function(e) {
    if (prevRadio) prevRadio.classList.toggle('active');
    if (prevLabel) prevLabel.classList.toggle('active');
    radio.classList.toggle('active');
    prevRadio = radio;
    labels[index].classList.toggle('active');
    prevLabel = labels[index];
    ball.className = `ball pos${index}`;
  });
});
    </script>
	
<!...........................................................................!>
	

    <input type="submit">
    </form>
    </div>
<!.............................................................................................................!>
	  
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
