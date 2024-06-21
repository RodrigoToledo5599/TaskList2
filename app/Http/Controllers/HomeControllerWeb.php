<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\TaskRepository;
use Auth;


class HomeControllerWeb extends Controller
{
    // public $taskRepo;
    // public function __construct(TaskRepository $taskRepository){
    //     $this->$taskRepo = $taskRepository;
    // }

    public function LoadHomePage(){
        $taskRepo = new TaskRepository();
        $user = Auth::user();
        $tasks = $taskRepo->getAllTasksFromUser($user->id);
        // dd($tasks);
        return view('home',[
                            'tasks' => $tasks
                            ]);
    }

    public function AddTaskAndRealoadHomePage(Request $request){
        $taskRepo = new TaskRepository();
        $user = Auth::user();
        $task = [
            "name" => $request["name"],
            "description" => $request["description"],
            "done" => false,
        ];
        $taskRepo->createTask($task,$user->id);
        return redirect('/home');
    }

    public function EditTaskPage($id){
        $taskRepo = new TaskRepository();
        $task = $taskRepo->getTask($id);
        // dd(json_decode($task)[0]);

        return view('editTask',[
                                "task" => json_decode($task)[0]
        ]);
    }

    public function EditTaskRequest($id,Request $request){
        $taskRepo = new TaskRepository();
        $doneResult = $request['done'] == null ? false : true;
        // dd($doneResult);
        $task = [
            "name" => $request['name'],
            "description" => $request['description'],
            "done" => $doneResult
        ];
        $taskRepo->updateTask($id,$task);
        return redirect('/home');
    }

    public function DeleteTaskRequest($id){
        $taskRepo = new TaskRepository();
        $taskRepo->deleteTask($id);
        return redirect('/home');
    }
}
