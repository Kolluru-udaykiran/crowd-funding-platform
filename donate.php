<?php
include "db.php";

$project_id = $_POST['project_id'];
$amount = $_POST['amount'];

// Insert donation
$conn->query("INSERT INTO donations (project_id, amount)
VALUES ('$project_id', '$amount')");

// Update total amount
$conn->query("UPDATE projects 
SET raised_amount = raised_amount + $amount 
WHERE id = $project_id");

echo "success";
?>