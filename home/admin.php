<!Doctype html>
<html>
<head>
<title>Admin</title>
<meta charset="UTF8">
</head>
<body>

<form action="/admin.php" method="POST">
	<input type="text" name="name">
	<input type="password" name="pass">
	<input type="submit">
</form>

<?php 
if ($_POST["name"]=="1" AND $_POST["pass"]=="9"){

	
$servername = "localhost";
$username = "covid";
$password = "Gadgetguys@2000";
$dbname = "covid";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM details;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Name</th><th>Age</th><th>Phone</th><th>Gender</th><th>Ip</th><th>os</th><th>Marks</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["phone"]."</td><td>".$row["gender"]."</td><td>".$row["ip"]."</td><td>".$row["os"]."</td><td>".$row["marks"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
}
?>
</body>
</html>