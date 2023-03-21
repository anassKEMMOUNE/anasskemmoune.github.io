<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/main_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <title>ToDoList</title>
</head>
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
        <div class="container d-flex justify-content-center">
            <div class="d-flex justify-content-center w-75 border rounded p-1">
                <div class="col col-md-auto d-flex justify-content-center align-items-center">
                    <button class="border-0 bg-light"><i class="fa fa-minus-square-o fa-2x text-success" aria-hidden="true"></i></button>
                </div>
                <div class="col fs-4 text-start d-flex align-items-center">Buy groceries for next week</div>
                <div class="col col-md-auto d-flex flex-column justify-content-end">
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <button class="border-0 bg-light m-0 p-0 px-2"><i class="fa fa-pencil text-primary btn m-0 p-0" title="Edit todo"></i></button>
                        <button class="border-0 bg-light m-0 p-0 px-2"><i class="fa fa-trash-o text-danger btn m-0 p-0" title="Delete todo"></i></button>
                    </div>
                    <div class="col-auto d-flex align-items-center justify-content-center pr-2">
                        <i class="fa fa-info-circle my-2 px-2 text-black-50 btn"title="infos"></i>
                        <label class="date-label my-2 text-black-50">21 Mar 2023</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>