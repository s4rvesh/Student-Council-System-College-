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

// sql to create table
$sql = "CREATE TABLE Event (
Event_n varchar(30),Event_date date,Event_venue varchar(30),Event_a varchar(20),
Event_id integer
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
