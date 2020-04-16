<?php $a = file_get_contents('https://api.covid19india.org/data.json');
$b=json_decode($a);
print_r($b);

?>