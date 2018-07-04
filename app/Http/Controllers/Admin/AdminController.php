<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'applications' => Application::orderBy('status', 'asc')->get(),
        ]);
    }
}
