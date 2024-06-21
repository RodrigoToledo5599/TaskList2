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

    public function getAllTasksFromUser($id){
        $tasks = DB::table('tasks')->where('user_id',$id)->get();
        return $tasks;
    }

    public function createTask($task,$userid){
        try{
            DB::table('tasks')->insert([
                'name' => $task['name'],
                'description' => $task['description'],
                'done' => $task['done'],
                'user_id' => $userid
            ]);
            // return "task " . $task['name'] . " was created sucessfully";
        }
        catch(Exception $e){
            Log::error_log($e->getMessage);
            return $e->getMessage;
        }
    }
    public function deleteTask($taskId){
        $result = DB::table('tasks')->where('id',$taskId)->delete();
        // return $result;
    }

    public function updateTask($taskId, $task){
        
        $result = DB::table('tasks')
            ->where('id', $taskId)
            ->update($task);
        return $result;
    }

}