<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $RegisModel = RegisModel::all();
        // return view('dashboard.index', compact('RegisModel'));
        return view('dashboard.index');
    }
}
