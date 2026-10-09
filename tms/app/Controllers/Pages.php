<?php

namespace App\Controllers;

use App\Models\UserModel;

class Pages extends BaseController
{
    public function profile()
    {
        $model = new UserModel();

        $data['title'] = 'Profile';
        $data['user']  = $model->first();

        return view('header', $data)
            . view('menu')
            . view('profile', $data)
            . view('footer');
    }

    public function about()
    {
        $data['title'] = 'About';

        return view('header', $data)
            . view('menu')
            . view('about', $data)
            . view('footer');
    }
}
