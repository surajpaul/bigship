<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
    	$activeEmp = User::get()->whereIn('role_id', '3');
    	return view('admin.dashboard', compact('activeEmp'));
    }
}
