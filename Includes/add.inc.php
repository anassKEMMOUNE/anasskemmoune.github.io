<?php
    include_once 'dbh.inc.php';

    $task = $_POST["task"];
    $category = $_POST["category"];
    $dueDate = $_POST["date"];
    $taskDescription = $_POST["taskDescription"];
    $success = false;

    // Adding the task
    if ($result = $mysqli -> query("INSERT...")) {
        header("Location: ../main.php?success=true");
    }
    else {
        header("Location: ../main.php?success=false");
    }
  
    $mysqli -> close();
