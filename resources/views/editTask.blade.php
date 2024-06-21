<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container py-5">
    <h1 class="display-4 text-center">Add a New Task</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="/addTaskRequest" method="POST">
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label for="taskTitle" class="form-label">Task name</label>
            <input name="name" type="text" class="form-control" id="taskTitle" placeholder="type here">
          </div>
          <div class="mb-3">
            <label for="taskDescription" class="form-label" >Task description </label>
            <textarea name="description" class="form-control" id="taskDescription" placeholder="type here (optional)" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <br>
        <a href="/home" class="btn btn-primary" >home page</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>