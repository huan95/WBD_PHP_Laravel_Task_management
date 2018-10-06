<?php

use Illuminate\Database\Seeder;
use App\Model;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Model\Task();
        $task->id               = 1;
        $task->title            = "Work 1";
        $task->content          = "work content 1";
        $task->image            = "";
        $task->due_date         = "2018-09-15";
        $task->save();
        $task = new Model\Task();
        $task->id               = 2;
        $task->title            = "Work 2";
        $task->content          = "work content 2";
        $task->image            = "";
        $task->due_date         = "2018-09-16";
        $task->save();
        $task = new Model\Task();
        $task->id               = 3;
        $task->title            = "Work 3";
        $task->content          = "work content 3";
        $task->image            = "";
        $task->due_date         = "2018-09-17";
        $task->save();
    }
}
