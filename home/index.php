<?php
session_start();
?>
<?php
$contents = file_get_contents("https://api.covid19india.org/data.json");
$contents = utf8_encode($contents);
$results = json_decode($contents,true);
$b=end($results['cases_time_series']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Risk Analyzer For Covid-19 | covid.gadgetguys.in</title>
	<meta name="description" content="Check Your Risk Score for COVID-19 From GADGETGUYS by giving some simple answer to our predetermined questions">
	<meta property="og:title" content="Risk Analyzer For Covid-19 | covid.gadgetguys.in" />
	<meta property="og:description" content="Check Your Risk Score for COVID-19 From GADGETGUYS by giving some simple answer to our predetermined questions" />
	<meta property="og:url" content="https://covid.gadgetguys.in" />
	<meta property="og:image" content="https://covid.gadgetguys.in/fimg.jpg" />
    <link rel="stylesheet" href="css/style.css">
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

	  
	  <div >

		  <h2 style="color: #FF5800"> TAKE COVID-19 SERIOUSLY</h2>
		  
        <div class="container">
			
					
		  <div class="face">
			<div class="eyes">
			  <span class="eye"></span>
			  <span class="eye"></span>
			  </div>
			</div>
			
						
		  </div>
		  
		  			
			<h2 style="color: #00FFE8">INDIAN COVID-19 LIVE UPDATE </h2>

		  <script>
      document.querySelector("body").addEventListener("mousemove", eyeball);
      function eyeball() {
        var eye = document.querySelectorAll(".eye");
        eye.forEach(function(eye) {
          let x = eye.getBoundingClientRect().left + eye.clientWidth / 2;
          let y = eye.getBoundingClientRect().top + eye.clientHeight / 2;
          let radian = Math.atan2(event.pageX - x, event.pageY - y);
          let rot = radian * (180 / Math.PI) * -1 + 270;
          eye.style.transform = "rotate(" + rot + "deg)";
        });
      }
    </script>
		  <!....................................................................................................................!>
		  
		  <div class="container2">
			  
		  <div class="boxa">
			 <div class="content">
			  <a herf="#"style="font-size: 80px"><?php echo $b['totalconfirmed']; ?></a>
			  <p>Confirmed Cases
				 </p>
			  </div>
			 </div>
			  
			  <div class="boxb">
			 <div class="content">
			     <a herf="#"style="font-size: 80px"><?php echo $b['totalconfirmed']-$b['totalrecovered']-$b['totaldeceased']; ?></a>
				 <p>Active Cases
				 </p>
			  </div>
			 </div>
			  
			  <div class="boxc">
			 <div class="content">
			  <a herf="#"style="font-size: 80px"><?php echo $b['totaldeceased']; ?></a>
			  <p>Death Cases
				 </p>
			  </div>
			 </div>
			  
			  <div class="boxd">
			 <div class="content">
			  <a herf="#"style="font-size: 80px"><?php echo $b['totalrecovered']; ?></a>
			  <p>Cured Cases
				 </p>
			  </div>
			 </div>	    
			  
		  </div>   
		  <!....................................................................................................................!>
		  
		  <h3 style="color: #3B3AFF">WE SHALL OVERCOME #COVID19</h3>
		  
		  <!....................................................................................................................!>
		  
		  <div class="container1">
			  
		  <div class="box">
			 <div class="content">
			  <img src="image/hand-wash.png">
			  <p>Wash your hands frequently for 20+ seconds with soap and water.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box">
			 <div class="content">
			  <img src="image/stay-home.png">
			  <p>Stay at home during this situation and limit contact with others in person. 
				 </p>
			  </div>
			 </div>
			  
			  <div class="box">
			 <div class="content">
			  <img src="image/mop.png">
			  <p>Routinely clean frequently touched spaces in your home to stop spreading.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box">
			 <div class="content">
			  <img src="image/family.png">
			  <p>Self-quarantining and social distancing is the best protocol you can follow at this point, especially since many areas are enforcing lockdowns and shelter in place orders.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box">
			 <div class="content">
			  <img src="image/medicine.png">
			  <p>Seek medical help if you’re suffering from a fever, cough or difficulty breathing.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box">
			 <div class="content">
			  <img src="image/sick.png">
			  <p>Educate your child to cover the mouth and nose with a tissue or flexed elbow while coughing and sneezing.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box">
			 <div class="content">
			  <img src="image/no-touch.png">
			  <p>Limit contact with pets and animals for a few months.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box">
			 <div class="content">
			  <img src="image/health.png">
			  <p>Always use safety mask when ever you are going outside for necessary works.
				 </p>
			  </div>
			 </div>
			    
			  
		  </div>   
		  
		 
		<h3 style="color: #FC3236">FOLLOW THESE DO'S & DON'TS MINUTELY</h3>
		  
		  <div class="container1">
			  
		  <div class="box1">
			 <div class="content">
			  <img src="image/cough.png">
			  <p>Don’t allow your child to come in close contact with anyone who has a cold, fever or flu-like symptoms.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box1">
			 <div class="content">
			  <img src="image/avoid-crowds.png">
			  <p>Don’t go to crowded places like parks, markets, and religious places., Keep yourself indoors as much as possible.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box1">
			 <div class="content">
			  <img src="image/coronavirus.png">
			  <p>Don't touch your face, nose, eyes frequently, to decrease the chance of being effected from this virus
				 </p>
			  </div>
			 </div>
			  
			  <div class="box1">
			 <div class="content">
			  <img src="image/hospital.png">
			  <p>Do not go to the hospital for routine check-ups or follow-ups. As far as possible make tele-consultation with your healthcare provider.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box1">
			 <div class="content">
			  <img src="image/group.png">
			  <p>Don't go with a close contact to such a person, going outside now a days.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box1">
			 <div class="content">
			  <img src="image/cough1.png">
			  <p>Don't ever spit in public places.
				 </p>
			  </div>
			 </div>
			  
			  <div class="box1">
			 <div class="content">
			  <img src="image/hide-and-seek.png">
				 <p>Do not hide your symptoms from family and friends.</p>
			  </div>
			 </div>
			  
			  <div class="box1">
			 <div class="content">
			  <img src="image/medical.png">
			  <p>Don’t self-medicate, as it's fair to be smart but not oversmart. Take advice from doctors.
				 </p>
			  </div>
			 </div>
			    
			  
		  </div>
		  
		  <h5 style="color: #69F52A">START CHECKING YOUR RISK</h5>
		  
		  <h4 style="margin-bottom: 10px;"><a href="/personal.php">START</a></h4>
		  
		  		  
    </div>

	  
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
