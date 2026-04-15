<?php
$conn = new mysqli("localhost", "root", "", "tournament");

$data = json_decode(file_get_contents("php://input"), true);

if ($data['password'] === "629802") {
  $conn->query("DELETE FROM teams");
  echo json_encode(["status" => "cleared"]);
} else {
  echo json_encode(["status" => "wrong"]);
}

$conn->close();
?>