<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "student_details";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  // echo "Connected successfully";
} catch (PDOException $e) {
  // echo "Connection failed: " . $e->getMessage();
}