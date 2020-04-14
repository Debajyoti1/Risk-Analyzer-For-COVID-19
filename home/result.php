<?php
    session_start(); 
    ?>
<?php
    $_SESSION["q7"]=$_POST["q7"];   
    $_SESSION["q8"]=$_POST["q8"];  
    $_SESSION["q9"]=$_POST["q9"];  
    $_SESSION["q10"]=$_POST["q10"];  
    $_SESSION["q11"]=$_POST["q11"];  
    $_SESSION["q12"]=$_POST["q12"];
    $_SESSION["q13"]=$_POST["q13"];

    $name=$_SESSION["Name"];
    $age=$_SESSION["Age"];
    $phone=$_SESSION["Phone"];
    $gender=$_SESSION["gender"];  

    $q1=$_SESSION["q1"];   
    $q2=$_SESSION["q2"];  
    $q3=$_SESSION["q3"];  
    $q4=$_SESSION["q4"];  
    $q5=$_SESSION["q5"];  
    $q6=$_SESSION["q6"];

    $q7=$_SESSION["q7"];   
    $q8=$_SESSION["q8"];  
    $q9=$_SESSION["q9"];  
    $q10=$_SESSION["q10"];  
    $q11=$_SESSION["q11"];  
    $q12=$_SESSION["q12"];
    $q13=$_SESSION["q13"]; 
    $ip=$_SERVER['REMOTE_ADDR'];
    $os=$_SERVER['HTTP_USER_AGENT'];

?>
<?php
$age = $_SESSION["Age"] + 0;
$marks=0;

if($age>=60){
    $marks +=1;
}

if($_SESSION["q1"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q2"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q3"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q4"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q5"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q6"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q7"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q8"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q9"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q10"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q11"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q12"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q13"]=="Yes"){
    $marks +=1;
}
$marks *=5;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Risk Analyzer</title>
    <link rel="stylesheet" href="css/style_result.css">
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
	 
<!.......................................................................................................................!>
	  
<div class="page-content">
	  <?php
      if ($marks>=60){
          echo '<div class="container">
          <div class="card">
              <div class="imgBox">
                  <img src="image/covid19 test report.jpg">
              </div>
              <div class="details">
                  <h2>Your COVID19 Test Report</h2>
                <h3 style="color:red">Your score is ';echo $marks;echo'%</h3>
                  <p> If you have submitted all data correctly. You have a high amount of risk for COVID19. Do steps necessarily.<br> Visit the Map to explore the nearest COVID19 isolation center, to test your blood.<br> This website will not share any data for suspicious victim detected by us. But it is your responsibility to keep yourself safe as well as your family. </p>
              </div>
          </div>
          </div>';
      }
      if ($marks<=30){
        echo '<div class="container">
        <div class="card">
            <div class="imgBox">
                <img src="image/covid19 test report.jpg">
            </div>
            <div class="details">
                <h2>Your COVID19 Test Report</h2>
              <h3 style="color:green">Your score is ';echo $marks;echo'%</h3>
                <p> If you have submitted all data correctly. You have a low amount of risk for COVID19. But still you should follow all precautions.<br> Visit the Map to explore the nearest COVID19 isolation center, to test your blood.<br> This website will not share any data for suspicious victim detected by us. But it is your responsibility to keep yourself safe as well as your family. </p>
            </div>
        </div>
        </div>'; 
      }
      if ($marks>30 AND $marks<60){
        echo '<div class="container">
        <div class="card">
            <div class="imgBox">
                <img src="image/covid19 test report.jpg">
            </div>
            <div class="details">
                <h2>Your COVID19 Test Report</h2>
              <h3 style="color:orange">Your score is ';echo $marks;echo'%</h3>
              <p> If you have submitted all data correctly. You have a medium amount of risk for COVID19. If possible have a test for your blood. Visit the Map to explore the nearest COVID19 isolation center, to test your blood.<br> This website will not share any data for suspicious victim detected by us. But it is your responsibility to keep yourself safe as well as your family. </p>
              </div>
        </div>
        </div>'; 
      }

	  ?>
	  </div>
      <div class="a1">
	  <a href="index.php">Retest</a>
	  </div>
    <div class="a2">
	  <a href="https://api.whatsapp.com/send?phone=&text=Get%20Check%20your%20risk%20for%20COVID19and%20disperse%20this%20virous%20from%20this%20website%3a%20https%3a%2f%2fdebajyoti.tk%20%F0%9F%A6%A0%0a%0aStay%20Indoors%20%26%20Stay%20Safe%20%F0%9F%87%AE%F0%9F%87%B3%20&source=&data=&app_absent=">Share</a>
	  </div>

<!.......................................................................................................................!>
	  
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


<?php
$servername = "localhost";
$username = "covid";
$password = "Gadgetguys@2000";
$dbname = "covid";
$sql = "INSERT INTO details (`name`, `age`, `phone`, `gender`, `ip`, `os`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `marks`) values('$name','$age','$phone','$gender','$ip','$os','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13',$marks);";


$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query($sql);
$conn->close();
?>



<?php
session_unset();

session_destroy();
?>
