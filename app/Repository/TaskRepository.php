<?php
namespace App\Repository;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class TaskRepository
{
    public function getTask($taskId){
        $task = DB::table('tasks')->where('id',$taskId)->get();
        return $task;
    }

    public function getAllTasks(){
        $tasks = DB::table('tasks')->get();
        return $tasks;
    }

    public function createTask($task){
        try{

            DB::table('tasks')->insert([
                'name' => $task['name'],
                'description' => $task['description'],
                'done' => $task['done']
            ]);
            return "task " . $task['name'] . " was created sucessfully";
        }
        catch(Exception $e){
            Log::error_log($e->getMessage);
            return $e->getMessage;
        }
    }
    public function deleteTask($taskId){
        $result = DB::table('tasks')->where('id',$taskId)->delete();
        return $result;
    }

    public function updateTask($taskId, $task){
        
    }

}