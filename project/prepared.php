 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudarshan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO Event (Event_n, Event_date, Event_venue,Event_a,Event_id) VALUES (?, ?, ?,?,?,?)");
$stmt->bind_param("sss", $Event_n, $Event_date, $Event_venue,$Event_a,$Event_id);

// set parameters and execute
$Event_n = "Neon";
$Event_date = "2017-10-11";
$Event_venue= "cc";
$Event_a="yes";
$Event_id="100"
$stmt->execute();

$Event_n = "Scrum";
$Event_date = "2017-10-12";
$Event_venue= "cc";
$Event_a="yes";
$Event_id="101"

$stmt->execute();

$Event_n = "Techtonic";
$Event_date = "2017-10-13";
$Event_venue= "cc";
$Event_a="yes";
$Event_id="102"


$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?> 