<?php
    session_start(); 
    ?>
<?php
    $_SESSION["q7"]=$_POST["q7"];   
    $_SESSION["q8"]=$_POST["q8"];  
    $_SESSION["q9"]=$_POST["q9"];  
    $_SESSION["q10"]=$_POST["q10"];  
    $_SESSION["q11"]=$_POST["q11"];  
    $_SESSION["q12"]=$_POST["q12"];
    $_SESSION["q13"]=$_POST["q13"];  
?>
<?php
$age=int($_SESSION["age"]);
$marks=0;
if ($age>=60) {
    $marks +=1;
}
if($_SESSION["q1"]=="Yes"){
    marks +=2;
}
if($_SESSION["q2"]=="Yes"){
    marks +=2;
}
if($_SESSION["q3"]=="Yes"){
    marks +=2;
}
if($_SESSION["q4"]=="Yes"){
    marks +=2;
}
if($_SESSION["q5"]=="Yes"){
    marks +=2;
}
if($_SESSION["q6"]=="Yes"){
    marks +=2;
}
if($_SESSION["q7"]=="Yes"){
    marks +=1;
}
if($_SESSION["q8"]=="Yes"){
    marks +=1;
}
if($_SESSION["q9"]=="Yes"){
    marks +=1;
}
if($_SESSION["q10"]=="Yes"){
    marks +=1;
}
if($_SESSION["q11"]=="Yes"){
    marks +=1;
}
if($_SESSION["q12"]=="Yes"){
    marks +=1;
}
if($_SESSION["q13"]=="Yes"){
    marks +=1;
}
echo $marks;


?>
<?php print_r($_SESSION); 
echo $_SESSION["q1"];
?>
<?php
session_unset();

session_destroy();
?>