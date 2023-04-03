<?php
    include_once 'dbh.inc.php';

    $user = 1;
    if (isset($_GET['task_id'])) {
        $task_id = $_GET['task_id'];
    }
    $dueDate = $_POST["date"];
    var_dump($dueDate);
    var_dump($task_id); 
    
    if ($conn->query("UPDATE task SET due_date = '$dueDate' WHERE task_id = 1;") == TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

