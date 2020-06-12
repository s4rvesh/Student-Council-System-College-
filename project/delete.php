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

// sql to delete a record
$sql = "DELETE FROM event ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error deleting record: " . $conn->error;
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
