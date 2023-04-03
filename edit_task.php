<?php
    if (isset($_GET['edit_task'])) {
        $task_id = $_GET['edit_task'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Edit Task</title>
</head>
<body>
    <form class="form m-5" method="POST" action="Includes/edit.inc.php?task_id=<?php echo $task_id;?>">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Due date</span>
            </div>
            <input type="date" id="date" name="date" class="form-control" value="">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
</body>
</html>