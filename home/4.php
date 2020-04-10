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
<?php print_r($_SESSION); ?>
<!DOCTYPE html>
<html>
<head> <title>RISK ANALYZER FOR COVID 19</title> </head>
<body>
<h1>Welcome to Risk Analyzer for COVID 19</h1>
<h2>Personal Details</h2></br>
<form action="/5.php" method="POST">
1.	Tell us if you ever went outside during these lockdown days?
  <input type="radio" id="yes" name="q7" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q7" value="No">
  <label for="no">No</label><br>

  2.	Tell us honestly if you have fever?
  <input type="radio" id="yes" name="q8" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q8" value="No">
  <label for="no">No</label><br>

  3.	Tell us honestly if you have headache?
  <input type="radio" id="yes" name="q9" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q9" value="No">
  <label for="no">No</label><br>

  4.	Tell us honestly if you have cough and cold?
  <input type="radio" id="yes" name="q10" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q10" value="No">
  <label for="no">No</label><br>

  5.	Tell us honestly if you have coarseness in voice?
  <input type="radio" id="yes" name="q11" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q11" value="No">
  <label for="no">No</label><br>

  6.	Tell us honestly if you have sore throat?
  <input type="radio" id="yes" name="q12" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q12" value="No">
  <label for="no">No</label><br>

  7.	Tell us honestly if you have shortness of breath?
  <input type="radio" id="yes" name="q13" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q13" value="No">
  <label for="no">No</label><br>
  <input type="submit">
    </form>

</body>
</html>