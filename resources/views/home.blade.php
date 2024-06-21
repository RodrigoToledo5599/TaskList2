<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TaskList App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    a{
      text-decoration: none;
    }
    a:hover{
      text-decoration:underline;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <a href="/addTask" class="btn btn-primary btn-lg" >Add Task</a>
    <a href="/" class="btn btn-primary btn-lg" >Change Account</a>
    <h1 class="display-4 text-center">{{$status}} </h1>
    <hr class="my-5">
    <div class="row">
      <div class="col">
        <ul class="list-group">
          @foreach($tasks as $task)
            <li class="list-group-item d-flex flex-row justify-content-between">
              <div>
                {{$task->id}} &nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="/editTaskPage/{{$task->id}}"> {{$task->name}} </a>
              </div>
              <div>
                <a class="btn btn-danger" data-method="delete" href="/deleteTaskRequest/{{$task->id}}"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                  </svg>
                </a>
              </div>
            </li>
           @endforeach
        </ul>
      </div>
    </div>
    <br>
    <a href="/home" class="btn btn-primary btn-info" >All</a>
    <a href="/homedone" class="btn btn-primary btn-info" >Done</a>
    <a href="/homenotdone" class="btn btn-primary btn-warning" >Not Done</a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>