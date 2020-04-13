<?php
    session_start(); 
?>
<?php
    $_SESSION["q1"]=$_POST["q1"];   
    $_SESSION["q2"]=$_POST["q2"];  
    $_SESSION["q3"]=$_POST["q3"];  
    $_SESSION["q4"]=$_POST["q4"];  
    $_SESSION["q5"]=$_POST["q5"];  
    $_SESSION["q6"]=$_POST["q6"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Risk Analyzer</title>
    <link rel="stylesheet" href="css/style_self.css">
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
		
		 <form action="/result.php" method="POST">				
			 	<div class="checkbox">
			 	 <p>1.	Tell us if you ever went outside during these lockdown days?</p>
		    	<label>
			     <input type="radio" id="yes" name="q1" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q1" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			   
			   <div class="checkbox1">
			 	 <p>2.	Tell us honestly if you have fever?</p>
		    	<label>
			     <input type="radio" id="yes" name="q2" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q2" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			  <div class="checkbox2">
			 	 <p>3.	Tell us honestly if you have headache?</p>
		    	<label>
			     <input type="radio" id="yes" name="q3" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q3" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox3">
			 	 <p>4.	Tell us honestly if you have cough and cold?</p>
		    	<label>
			     <input type="radio" id="yes" name="q4" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q4" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox4">
			 	 <p>5.	Tell us honestly if you have coarseness in voice?</p>
		    	<label>
			     <input type="radio" id="yes" name="q5" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q5" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox5">
			 	 <p>6.	Tell us honestly if you have sore throat?</p>
		    	<label>
			     <input type="radio" id="yes" name="q6" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q6" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox6">
			 	 <p>7.	Tell us honestly if you have shortness of breath?</p>
		    	<label>
			     <input type="radio" id="yes" name="q7" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q7" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div>
			 <input type="Submit" class="a1" >
			 </div>
			 
			 </form>
			 

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
