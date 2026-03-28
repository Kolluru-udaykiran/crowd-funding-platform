<?php
include "db.php";

$title = $_POST['title'];
$desc = $_POST['description'];
$goal = $_POST['goal'];
$user_id = 1;

$sql = "INSERT INTO projects (title, description, goal_amount, created_by)
VALUES ('$title', '$desc', '$goal', '$user_id')";

$conn->query($sql);

echo "Project Created!";
?>