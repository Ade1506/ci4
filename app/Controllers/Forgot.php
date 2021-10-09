<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Forgot extends BaseController
{
    public function index()
    {
        return view('forgot');
        // helper(['form']);
        // echo view('login');
    }
}