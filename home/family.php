<?php
session_start();
?>
<?php
    $_SESSION["Name"]=$_POST["Name"];
    $_SESSION["Age"]=$_POST["Age"];
    $_SESSION["Phone"]=$_POST["Phone"];
    $_SESSION["gender"]=$_POST["gender"];    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Risk Analyzer</title>
    <link rel="stylesheet" href="css/style_family.css">
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
	  
		
		 <form action="/self.php" method="POST">				
			 	<div class="checkbox">
			 	 <p> 1.	Is there any person from your family traveled internationally recently?</p>
		    	<label>
			     <input type="radio" id="yes" name="q1" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q1" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			   
			   <div class="checkbox">
			 	 <p>2.	If any of your family members had used public transport recently?</p>
		    	<label>
			     <input type="radio" id="yes" name="q2" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q2" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			  <div class="checkbox">
			 	 <p> 3.	If you or someone from your family come in close contact with <br>a confirmed covid 19 recently?</p>
		    	<label>
			     <input type="radio" id="yes" name="q3" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q3" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox">
			 	 <p>4.	If you came in close contact with someone one having <br>cough cold fever and shortness of breath recently?</p>
		    	<label>
			     <input type="radio" id="yes" name="q4" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q4" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox">
			 	 <p>5.	If anyone in your family is doctor , police or doing any other<br>social jobs during lockdown days & have a close contact with you ?</p>
		    	<label>
			     <input type="radio" id="yes" name="q5" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q5" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div class="checkbox">
			 	 <p>6.	If you or anyone from your family aren't using masks or gloves<br>at the time of buying essential comodities like food and washing<br>hand, face & legs properly after reaching home?</p>
		    	<label>
			     <input type="radio" id="yes" name="q6" value="Yes" checked>
				 <span class="yes">Yes</span>
		    	</label>
		    	<label>
 				 <input type="radio" id="no" name="q6" value="No">
 				 <span class="no">No</span>
		    	</label>
		    	</div>
			 
			 <div>
			 <input type="Submit" class="a1" >
			 </div>
			 
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
