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
            
            if ($result0 = $conn -> query("SELECT MAX(task_id) FROM task")) {
                $row = $result0 -> fetch_assoc();
                $max_id = $row['MAX(task_id)'] + 1;
            }
            
            if ($result = $conn -> query("INSERT INTO task (task_id, task_name, task_description, due_date, status) VALUES ('$max_id', '$task', '$taskDescription', '$dueDate', '$status')")) {
                if ($result = $conn -> query("INSERT INTO user_task (user_id, task_id) VALUES ('$user', '$max_id')")) {
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
