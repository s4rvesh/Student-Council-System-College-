<html>
<head>
<title>Club Details</title>
<style>
body{
background-color:93B874
}
</style>
<h1><center>Club Details Page</center></h1>
</head>
<body>
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

$sql = "SELECT Event_id,Event_date, Event_n FROM Event";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Event_id: " . $row["Event_id"]. " Event_Date : " . $row["Event_date"]. "Event_n " . $row["Event_n"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

</body>
</html>

