<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.home');
    }
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:manager');
    }
}
