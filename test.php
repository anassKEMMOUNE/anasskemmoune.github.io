
<?php
    include_once __DIR__.'/Includes/dbh.inc.php';

    if ($result = $conn -> query("SELECT MAX(task_id) FROM task")) {
        $row = $result -> fetch_assoc();
        $max_id = $row['MAX(task_id)'];
    }
    