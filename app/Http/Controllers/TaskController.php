<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\TaskRepository;

class TaskController extends Controller
{
    public $taskRepo;

    public function __construct(TaskRepository $taskRepo)
    {
        $this->taskRepo = $taskRepo;
    }

    public function getTask($taskId){
        $task = $this->taskRepo->getTask($taskId);
        return $task;
    }

    public function getAllTasks(){
        $task = $this->taskRepo->getAllTasks();
        return $task;
    }

    public function createTask(Request $request)
    {
        $task = [
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "done" => $request->input('done')
        ];
        $result = $this->taskRepo->createTask($task);
        return $result;
    }

    public function deleteTask($taskId){
        $result = $this->taskRepo->deleteTask($taskId);
        return $result;
    }

    public function updateTask(Request $request){
        $task = [ 
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "done" => $request->input('done')
        ];
        

    }

}
