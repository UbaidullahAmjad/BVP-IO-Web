<?php

$mysqli = new mysqli("localhost","u158205072_bvp","Bvp12345","u158205072_bvp");
if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];
$sql = "DELETE FROM donations WHERE id=$id";

if ($mysqli->query($sql) === TRUE) {
    header('Location: /admin/index.php');
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}