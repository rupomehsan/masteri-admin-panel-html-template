<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.index');
    }

    public function all()
    {
        return view('backend.crud.index');
    }
    public function create()
    {
        return view('backend.crud.create');
    }
}
