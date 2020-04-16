<?php $a = file_get_contents('https://api.covid19india.org/data.json');
echo $a;
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
  <div style="background-color: red">1</div>
  <div style="background-color: blue">2</div>
  <div style="background-color: green">3</div>
  <div style="background-color: yellow">4</div>  
</div>

</body>
</html>
