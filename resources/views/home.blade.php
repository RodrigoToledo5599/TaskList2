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
    <h1 class="display-4 text-center">Your Tasks</h1>
    <hr class="my-5">
    <div class="row">
      <div class="col">
        <h2>Your Tasks:</h2>
        <ul class="list-group">
          @foreach($tasks as $task)
            <li class="list-group-item">
              {{$task->id}} &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="/editTaskPage/{{$task->id}}">
                {{$task->name}}
              </a>
            </li>
           @endforeach
        </ul>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>