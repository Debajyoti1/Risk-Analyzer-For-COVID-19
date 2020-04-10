<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> <title>RISK ANALYZER FOR COVID 19</title> </head>
<body>
<h1>Welcome to Risk Analyzer for COVID 19</h1>
<h2>Personal Info</h2></br>

<form action="/family.php" method="POST">
    Name * : <input type="text" name="Name" required><br>
    Age * : <input type="text" name="Age" required><br>
    Phone(optional): <input type="text" name="Phone"><br>
  Gender :
  <input type="radio" id="male" name="gender" value="male" checked>
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
    <input type="submit">
    </form>

</body>
</html>