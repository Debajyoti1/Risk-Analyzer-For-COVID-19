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
  color: white;
  border-radius: 7px;
}
</style>
</head>
<body>
<div class="block">
  <div style="background-color: orange">Total confirmed: <?php echo $b['totalconfirmed']; ?></div>
  <div style="background-color: red">Total active: <?php echo $b['totalconfirmed']-$b['totalrecovered']-$b['totaldeceased']; ?></div>
  <div style="background-color: green">Total Recovered: <?php echo $b['totalrecovered']; ?></div>
  <div style="background-color: grey">Total deceased: <?php echo $b['totaldeceased']; ?></div>  
</div>

</body>
</html>
