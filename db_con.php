<?php
$servername = "localhost";
$username = "KUPTM_SMDAS";
$password = "project_smdas";
$dbname = "kuptm-smdas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>