<?php
$servername = "localhost";
$username = "Yasminebch01";
$password = "Inaona56!";
$db_name = "noscam";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>