<?php
$conn = new mysqli("localhost", "root", "", "tournament");

$data = json_decode(file_get_contents("php://input"), true);

$team = $data['teamName'];
$leader = $data['leaderName'];
$phone = $data['phone'];

$sql = "INSERT INTO teams (team_name, leader_name, phone)
        VALUES ('$team', '$leader', '$phone')";

if ($conn->query($sql) === TRUE) {
  echo json_encode(["status" => "success"]);
} else {
  echo json_encode(["status" => "error"]);
}

$conn->close();
?>