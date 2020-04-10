<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> <title>RISK ANALYZER FOR COVID 19</title> </head>
<body>
<h1>Welcome to Risk Analyzer for COVID 19</h1>
<h2>Family Details</h2></br>
<?php
    $_SESSION["Name"]=$_POST["Name"];
    $_SESSION["Age"]=$_POST["Age"];
    $_SESSION["Phone"]=$_POST["Phone"];
    $_SESSION["gender"]=$_POST["gender"];    
?>
<form action="/4.php" method="POST">
    1.	Is there any person from your family visited any of the following countries china, Italy ,France ,Spain etc. recently?
  <input type="radio" id="yes" name="q1" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q1" value="No">
  <label for="no">No</label><br>

  2.	Let us know if any of your family members had used public transport like train bus recently?
  <input type="radio" id="yes" name="q2" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q2" value="No">
  <label for="no">No</label><br>

  3.	Let us know if you or someone from your family come in close contact with a confirmed covid 19 recently?
  <input type="radio" id="yes" name="q3" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q3" value="No">
  <label for="no">No</label><br>

  4.	Let us know if you came in close contact with someone one having cough cold fever and shortness of breath recently?
  <input type="radio" id="yes" name="q4" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q4" value="No">
  <label for="no">No</label><br>

  5.	Tell us if anyone in your family is doctor , police or doing any other social jobs during lockdown days & have a close contact with you ?
  <input type="radio" id="yes" name="q5" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q5" value="No">
  <label for="no">No</label><br>

  6.	Tell us if you or anyone from your family are using masks or gloves at the time of buying essential comodities like food and washing hand, face & legs properly after reaching home. 
  <input type="radio" id="yes" name="q6" value="Yes" checked>
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="q6" value="No">
  <label for="no">No</label><br>
  <input type="submit">
    </form>

</body>
</html>