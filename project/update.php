 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudarshan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE event SET Event_date='2017-07-23' WHERE Event_id=11";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully<br>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 
<html>
<head>
</head>
<body>
<form action="dashboard.html">
<input type="submit"  value="Click me to Return">
<!--<button type="submit">Click me</button>-->
</form>
<!--<a href="dashboard.html">Click me to Retrun</a>-->
</body>
</html>

