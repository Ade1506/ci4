<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // $session = session();
        // echo "Welcome back, ".$session->get('user_name');
        return view('dashboard');

        // if(! session()->get('logged_in'))
        // {
        //     return redirect()->to(base_url('/')); 
        // }

        // echo view('layout/header');
        // echo view('layout/sidebar');
        // echo view('dashboard');
        // echo view('layout/footer');
    }

    // public function user()
    // {
    //     return view('user');
    //     // echo view('layout/header');
    //     // echo view('layout/sidebar');
    //     // echo view('user');
    //     // echo view('layout/footer');
    // }
}