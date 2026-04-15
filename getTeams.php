<?php
$conn = new mysqli("localhost", "root", "", "tournament");

$result = $conn->query("SELECT * FROM teams ORDER BY id ASC");

$teams = [];

while ($row = $result->fetch_assoc()) {
  $teams[] = $row;
}

echo json_encode($teams);
$conn->close();
?>