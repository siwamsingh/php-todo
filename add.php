<?php
include("db.php");
$task = $_POST['task'];
$conn->query("INSERT INTO tasks (task) VALUES ('$task')");
header("Location: index.php");
?>
