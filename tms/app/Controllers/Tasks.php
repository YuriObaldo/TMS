<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data['title'] = 'All Tasks';
        $data['tasks'] = $model
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('header', $data)
            . view('menu')
            . view('tasks', $data)
            . view('footer');
    }
}
