<!DOCTYPE html>
<html>
<head> <title>RISK ANALYZER FOR COVID 19</title> </head>
<body>
<h1>Welcome to Risk Analyzer for COVID 19</h1>
<h2>To Start Analyzing Please Enter Some Information</h2></br>
<?php
    $_SESSION["name"]=$_POST["name"];
    $_SESSION["age"]=$_POST["age"];
    $_SESSION["phone"]=$_POST["phone"];
?>

<p>welcome <?php
    echo " " $_SESSION["name"];
            ?>
</p>
<form action="/action_page.php">
  <p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>

  <br>  

  <p>Please select your age:</p>
  <input type="radio" id="age1" name="age" value="30">
  <label for="age1">0 - 30</label><br>
  <input type="radio" id="age2" name="age" value="60">
  <label for="age2">31 - 60</label><br>  
  <input type="radio" id="age3" name="age" value="100">
  <label for="age3">61 - 100</label><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>