<?php
$servername = "localhost";
$username = "migsdev";
$password = "MigsDev112503#2003";
$database = "evaluation";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>