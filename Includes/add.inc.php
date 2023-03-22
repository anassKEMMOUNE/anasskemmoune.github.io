<?php
    include_once 'dbh.inc.php';

    $user = 1;
    $task = $_POST["task"];
    $category = $_POST["category"];
    $dueDate = $_POST["date"];
    $taskDescription = $_POST["taskDescription"];
    $status = "NotDoneYet";

    //checking if the task table is empty
    if ($isEmpty = $conn -> query("SELECT * from task")) {
        $rowCount = mysqli_num_rows($isEmpty);
        if ($rowCount == 0) {
            // Adding the very first task
            if ($result = $conn -> query("INSERT INTO task (task_id, task_name, task_description, due_date, status) VALUES (1, '$task', '$taskDescription', '$dueDate', '$status')")) {
                if ($result = $conn -> query("INSERT INTO user_task (user_id, task_id) VALUES ('$user', 1)")) {
                    header("Location: ../main.php?success=true");
                }
                else {
                    header("Location: ../main.php?success=false");
                }
            }
            else {
                header("Location: ../main.php?success=false");
            }
        }
        else {
            // Adding the task
            $rowCount++;
            if ($result = $conn -> query("INSERT INTO task (task_id, task_name, task_description, due_date, status) VALUES ('$rowCount', '$task', '$taskDescription', '$dueDate', '$status')")) {
                if ($result = $conn -> query("INSERT INTO user_task (user_id, task_id) VALUES ('$user', '$rowCount')")) {
                    header("Location: ../main.php?success=true");
                }
                else {
                    header("Location: ../main.php?success=false");
                }
            }
            else {
                header("Location: ../main.php?success=false");
            }
        }
    }

    $conn -> close();
