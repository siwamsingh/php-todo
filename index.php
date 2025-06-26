<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>ToDo List</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>My ToDo List</h2>
    <form action="add.php" method="POST">
        <input type="text" name="task" required>
        <button type="submit">Add Task</button>
    </form>
    <ul>
    <?php
    $result = $conn->query("SELECT * FROM tasks");
    while($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['task']) . 
             " <a href='complete.php?id=" . $row['id'] . "'>✔️</a> 
               <a href='delete.php?id=" . $row['id'] . "'>❌</a></li>";
    }
    ?>
    </ul>
</body>
</html>
