<?php
include "db.php";

$project_id = $_POST['project_id'];
$text = $_POST['update'];

$conn->query("INSERT INTO updates (project_id, update_text)
VALUES ('$project_id', '$text')");
?>