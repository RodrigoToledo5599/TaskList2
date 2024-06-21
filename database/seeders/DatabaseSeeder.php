<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('secret'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('secret123'),
            ],
            // Add more users as needed
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $tasks = [
            [
                'name' => 'Learn Laravel Migrations',
                'description' => 'This task involves understanding how to create migration files to define the structure of database tables in a Laravel application.',
                'done' => true,
                'user_id' => 1
            ],
            [
                'name' => 'Write Seeders for Tasks',
                'description' => 'This task involves creating seed files to populate the tasks table with some sample data.',
                'done' => true,
                'user_id' => 1
            ],
            [
                'name' => 'Implement Task CRUD Operations',
                'description' => 'This task involves creating, reading, updating, and deleting tasks within the application.',
                'done' => false,
                'user_id' => 2
            ],
            [
                'name' => 'Create User Authentication',
                'description' => 'This task involves implementing user registration, login, and logout functionalities.',
                'done' => false,
                'user_id' => 1
            ],
            [
                'name' => 'Design User Interface for Tasks',
                'description' => 'This task involves creating a user-friendly interface to view, add, edit, and mark tasks as done.',
                'done' => false,
                'user_id' => 2
            ],
            [
                'name' => 'Deploy Application to Server',
                'description' => 'This task involves deploying the application to a web server to make it accessible online.',
                'done' => false,
                'user_id' => 2
            ],
            [
                'name' => 'Write Unit Tests for Tasks',
                'description' => 'This task involves writing unit tests to ensure the functionality of the task management features.',
                'done' => false,
                'user_id' => 1
            ],
        ];
        foreach ($tasks as $task) {
            Task::create($task);
        }
        

    }
}
