<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new TaskModel();
        $today = date('Y-m-d');

        $data['title'] = 'Welcome';
        $data['today'] = $today;
        $data['tasks'] = $model
            ->where('task_date', $today)
            ->orderBy('created_at', 'ASC')
            ->findAll();

        return view('header', $data)
            . view('menu')
            . view('welcome', $data)
            . view('footer');
    }
}
