<?php
$conn = new mysqli("localhost", "root", "", "crowd_fund");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>