<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/main_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>    

    <title>ToDoList</title>
</head>
<style>
    .shake:hover {
    animation: shake 0.5s;
    animation-iteration-count: infinite;
 }

 @keyframes shake {
    0% { transform: translate(1px, 1px) rotate(0deg); }
    10% { transform: translate(-1px, -2px) rotate(-1deg); }
    20% { transform: translate(-3px, 0px) rotate(1deg); }
    30% { transform: translate(3px, 2px) rotate(0deg); }
    40% { transform: translate(1px, -1px) rotate(1deg); }
    50% { transform: translate(-1px, 2px) rotate(-1deg); }
    60% { transform: translate(-3px, 1px) rotate(0deg); }
    70% { transform: translate(3px, 1px) rotate(-1deg); }
    80% { transform: translate(-1px, -1px) rotate(1deg); }
    90% { transform: translate(1px, 2px) rotate(0deg); }
    100% { transform: translate(1px, -2px) rotate(-1deg); }
 }
</style>
<body>
    <div class="container m-5 p-2 rounded mx-auto bg-light shadow border position-relative h-75">

        <!-- App title section -->

        <div class="row m-1 p-4">
            <div class="col">
                <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                    <i class="fa fa-check bg-primary text-white rounded p-2" aria-hidden="true"></i>
                    <p>ToDoList</p>
                </div>
            </div>
            <div class="p-2 mx-4 border-black-25 border-bottom"></div>
        </div>

        <!-- Tasks -->

        <?php
        include_once __DIR__.'/Includes/dbh.inc.php';

        $user = 1;

        // delete a task on button click

        if (isset($_GET['del_task'])) {
            $task_id = $_GET['del_task'];
            if ($result = $conn -> query("DELETE FROM user_task WHERE task_id = $task_id;")){
                if ($result = $conn -> query("DELETE FROM task WHERE task_id = $task_id;")){
                }
            }
            header('location: main.php');
        }

        // checking if the task table is empty

        if ($isEmpty = $conn -> query("SELECT * from task")) {
            $rowCount = mysqli_num_rows($isEmpty);
            if ($rowCount != 0) {
                if ($result = $conn -> query("SELECT T.task_id, T.task_name, T.task_description, T.due_date, T.status FROM task T INNER JOIN user_task UT ON T.task_id = UT.task_id AND user_id = $user;")) {
                    while ($row = $result -> fetch_assoc()) {
        ?>

        <div class="container d-flex justify-content-center mb-2">
            <div class="d-flex justify-content-center w-75 border rounded p-1">
                <div class="col col-md-auto d-flex justify-content-center align-items-center">
                    <button class="border-0 bg-light"><i id="<?php echo $row['task_id']?>" class="fa fa-minus-square-o fa-2x text-success" aria-hidden="true"></i></button>
                </div>
                <div class="col fs-4 text-start d-flex align-items-center"><?php echo $row['task_name'] ?></div>
                <div class="col col-md-auto d-flex flex-column justify-content-end">
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <button class="border-0 bg-light m-0 p-0 px-2"><i class="fa fa-pencil text-primary btn m-0 p-0" title="Edit todo" onclick="window.location.href='edit_task.php?edit_task=<?php echo $row['task_id'];?>';"></i></button>
                        <button class="border-0 bg-light m-0 p-0 px-2"><i class="fa fa-trash-o text-danger btn m-0 p-0 shake" title="Delete todo" onclick="window.location.href='main.php?del_task=<?php echo $row['task_id'];?>';"></i></button>
                    </div>
                    <div class="col-auto d-flex align-items-center justify-content-center pr-2">
                        <i class="fa fa-info-circle my-2 px-2 text-black-50 btn"title=<?php echo $row['task_description'] ?>></i>
                        <label class="date-label my-2 text-black-50"><?php echo $row['due_date'] ?></label>
                    </div>
                </div>
            </div>
        </div>

        <?php
                    }
                }
                else {
                
                }
            }
        }
        ?>

    </div>
</body>

<script>
    for (let i =0;i<5;i++){
        let id ="#"+ i;
        $(id).on("mouseenter", function() {
            $(id).removeClass("fa-minus-square-o");
            $(id).addClass("fa-check-square");
        });

        $(id).on("mouseleave", function() {
            $(id).removeClass("fa-check-square");
            $(id).addClass("fa-minus-square-o");
        });
    }
</script>
</html>