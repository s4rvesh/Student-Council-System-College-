 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudarshan";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO event (Event_n,Event_date,Event_venue,Event_a,Event_id)
VALUES ('NEON','2017-07-19','CC','yes',10),('SCRUM','2017-07-20','CC','No',11),
('TECHTONIC','2017-07-21','CC','Yes',12),('SPORTS','2017-07-22','CC','No',13)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
