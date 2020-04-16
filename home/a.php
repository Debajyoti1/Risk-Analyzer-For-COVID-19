<?php
$contents = file_get_contents("https://api.covid19india.org/data.json");
$contents = utf8_encode($contents);
$results = json_decode($contents,true);
$b=end($results['cases_time_series']);
?>
<!Doctype html>
<html>
<head>
<title>Testing</title>
<style>
#d{
    display: inline;
}
</style>
</head>
<body>
<div>
    <div id="d" style="color: orange">
        <p>Total confirmed: <?php echo $b['totalconfirmed']; ?> </p>
    </div>
    <div id="d" style="color: red">
        <p>Total active: <?php echo $b['totalconfirmed']-$b['totalrecovered']-$b['totaldeceased']; ?> </p>
    </div>
    <div id="d" style="color: green">
        <p>Total recovered: <?php echo $b['totalrecovered']; ?> </p>
    </div>
    <div id="d" style="color: silver">
        <p>Total deceased: <?php echo $b['totaldeceased']; ?> </p>
    </div>
</div>
</body>
</html>