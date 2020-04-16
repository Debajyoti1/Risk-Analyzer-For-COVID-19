<?php
$contents = file_get_contents("https://api.covid19india.org/data.json");
$contents = utf8_encode($contents);
$results = json_decode($contents,true);
$b=end($results['cases_time_series']);
?>
<!DOCTYPE html>
<html>
<head>
<style>
.block {
  display: flex;
  justify-content: center;
  background-color: white;
}

.block  div {
  width: 300px;
  margin: 10px;
  text-align: center;
  line-height: 200px;
  font-size: 30px;
}
</style>
</head>
<body>
<div class="block">
  <div style="background-color: red">Total confirmed: <?php echo $b['totalconfirmed']; ?></div>
  <div style="background-color: blue">Total active: <?php echo $b['totalconfirmed']-$b['totalrecovered']-$b['totaldeceased']; ?></div>
  <div style="background-color: green"><?php echo $b['totalrecovered']; ?></div>
  <div style="background-color: yellow">Total deceased: <?php echo $b['totaldeceased']; ?></div>  
</div>

</body>
</html>