<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterWorkerController extends Controller
{
    public function index()
    {
        return view('register.worker.index');
    }
}
