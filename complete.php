<?php
include("db.php");
$id = $_GET['id'];
$conn->query("UPDATE tasks SET task = CONCAT('[DONE] ', task) WHERE id=$id");
header("Location: index.php");
?>
