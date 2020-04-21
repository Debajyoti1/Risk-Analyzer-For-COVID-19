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
    <title>Risk Analyzer For Covid-19-self | covid.gadgetguys.in</title>
    <link rel="stylesheet" href="css/style_self.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
  <nav>
        <a href="/"><img src="gg.png" alt="covid19 risk checker"></a>
        <ul>
          <li><a href="https://gadgetguys.in">Home</a></li>
          <li><a href="https://gadgetguys.in/covid19-live-tracker/">Global</a></li>
          <li><a href="https://gadgetguys.in/covid19-live-status-in-india/">India</a></li>
          <li><a href="https://gadgetguys.in/FAQ">FAQ</a></li>
          <li><a href="https://gadgetguys.in/use">How to use</a></li>
        </ul>
      </nav>	  
	  
		
		 <form action="/result.php" method="POST">				
			 	<div class="checkbox">
			 	 <p>1.	Tell us if you ever went outside during these lockdown days?</p>
		    	<label>
			     <input type="radio" id="yes" name="q7" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q7" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			   
			   <div class="checkbox">
			 	 <p>2.	Tell us honestly if you have fever?</p>
		    	<label>
			     <input type="radio" id="yes" name="q8" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q8" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			  <div class="checkbox">
			 	 <p>3.	Tell us honestly if you have headache?</p>
		    	<label>
			     <input type="radio" id="yes" name="q9" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q9" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox">
			 	 <p>4.	Tell us honestly if you have cough and cold?</p>
		    	<label>
			     <input type="radio" id="yes" name="q10" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q10" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox">
			 	 <p>5.	Tell us honestly if you have coarseness in voice?</p>
		    	<label>
			     <input type="radio" id="yes" name="q11" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q11" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox">
			 	 <p>6.	Tell us honestly if you have sore throat?</p>
		    	<label>
			     <input type="radio" id="yes" name="q12" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q12" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox">
			 	 <p>7.	Tell us honestly if you have shortness of breath?</p>
		    	<label>
			     <input type="radio" id="yes" name="q13" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q13" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 

			 <input type="Submit" class="a1" >
			 
			 </form>
			 

	  
    
	  
  <footer>
      <div class="footer-container">
        <div class="left-col">
          <img src="gg.png" alt="" class="logo">
          <div class="social-media">
            <a href="https://www.facebook.com/askgadgetguys"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/askgadgetguys"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/gadgetguys.in/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/gadgetguys/"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/company/gadgetguys/"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p class="rights-text">© gadgetguys | All Rights Reserved.</p>
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
