<?php

namespace App\Controllers;

use App\Controllers\Home;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle'=>'Home :: Dashbooard',
            // 'userinfo'=>$userInfo
        ];
        return view('home', $data);
    }
}
