<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hair spa booking";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $frname = $_POST["frname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $date = $_POST["date"];
  $services = $_POST["services"];




$sql = "INSERT INTO fromdetails (name, email, phone, date, service)
VALUES('".$frname."','".$email."','".$phone."','".$date."','".$services."')";


if ($conn->query($sql) === TRUE) {
    echo "Thank you!! ";
    echo "<br>";
	echo "Appoiment Booked Successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// $sql = "SELECT name, email,phone,caketype,flavour,quantity,comments FROM cakeorder where email='$email'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//    echo $name;
//    echo "<br>";
//    echo $email;
//    echo "<br>";
//    echo $phone;
//    echo "<br>";
//    echo $caketype;
//    echo "<br>";
//    echo $flavour;
//    echo "<br>";
//    echo $quantity;
//    echo "<br>";
//    echo $comments;
//    echo "<br>"; 
// } else {
//     echo "0 results";
// }

$conn->close();
}
?>