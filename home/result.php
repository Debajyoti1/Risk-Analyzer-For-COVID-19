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

    $name=$_SESSION["Name"];
    $age=$_SESSION["Age"];
    $phone=$_SESSION["Phone"];
    $gender=$_SESSION["gender"];  

    $q1=$_SESSION["q1"];   
    $q2=$_SESSION["q2"];  
    $q3=$_SESSION["q3"];  
    $q4=$_SESSION["q4"];  
    $q5=$_SESSION["q5"];  
    $q6=$_SESSION["q6"];

    $q7=$_SESSION["q7"];   
    $q8=$_SESSION["q8"];  
    $q9=$_SESSION["q9"];  
    $q10=$_SESSION["q10"];  
    $q11=$_SESSION["q11"];  
    $q12=$_SESSION["q12"];
    $q13=$_SESSION["q13"]; 
    $ip=$_SERVER['REMOTE_ADDR'];
    $os=$_SERVER['HTTP_USER_AGENT'];

?>
<?php
$age = $_SESSION["Age"] + 0;
$marks=0;

if($age>=60){
    $marks +=1;
}

if($_SESSION["q1"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q2"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q3"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q4"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q5"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q6"]=="Yes"){
    $marks +=2;
}
if($_SESSION["q7"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q8"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q9"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q10"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q11"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q12"]=="Yes"){
    $marks +=1;
}
if($_SESSION["q13"]=="Yes"){
    $marks +=1;
}
$marks *=5;
?>
<?php echo $marks; ?>

<?php
$servername = "localhost";
$username = "covid";
$password = "Gadgetguys@2000";
$dbname = "covid";
$sql = "INSERT INTO details values('$name','$age','$phone','$gender','$ip','$os','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13',$marks);";


$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query($sql);
$conn->close();
?>









<?php
session_unset();

session_destroy();
?>
