<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Add Task</title>
</head>
<body>
<form class="form m-5" method="POST" action="add.inc.php">

        <div class="form-floating m-3 w-25">
            <input type="text" id="task" name="task" class="form-control" placeholder="Task" value="">
            <label for="task">Task:</label>
        </div>

        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="category">
            <option disabled selected value="">~ Category</option>
            <option value="Sport">Sport</option>
            <option value="Work">Work</option>
            <option value="Study">Study</option>
            <option value="Business">Business</option>
            <option value="Grocery">Grocery</option>
            <option value="Chores">Chores</option>
            <option value="Shopping">Shopping</option>
            <option value="Other">Other</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Due date</span>
            </div>
            <input type="date" id="date" name="date" class="form-control" value="">
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" name="taskDescription" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Task Description</label>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Add</button>
        </div>

    </form>
</body>
</html>