<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexUser(){
        return view("user.dashboard");
    }

    public function indexAdmin(){
        return view("admin.index");
    }


}
