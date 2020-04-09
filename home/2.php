<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> <title>RISK ANALYZER FOR COVID 19</title> </head>
<body>
<h1>Welcome to Risk Analyzer for COVID 19</h1>
<h2>To Start Analyzing Please Enter Some Information</h2></br>

<form action="start.php" method="POST">
    Name * : <input type="text" name="name" required><br>
    Age * : <input type="text" name="age" required><br>
    Phone(optional): <input type="text" name="phone"><br>
  Gender :
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
    <input type="submit">
    </form>

</body>
</html>