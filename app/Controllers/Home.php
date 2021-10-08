<?php

namespace App\Controllers;

use App\Controllers\Home;

class Home extends BaseController
{
    public function index()
    {
        // if (session()->get('username')=='') {
        //     session()->setFlashdata('error', 'Silahkan login terlebih dahulu!');
        //     return redirect()->to(base_url('login'));
        // }

        return view('welcome_message');
        // echo view('layout/header');
        // echo view('layout/sidebar');
        // echo view('dashboard');
        // echo view('layout/footer');
    }
}
