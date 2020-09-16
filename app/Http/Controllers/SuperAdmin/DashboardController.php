<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\EmployeeDetail;
use App\EmpOfficialDetails;

class DashboardController extends Controller
{
    public function index()
    {
    	$details = EmployeeDetail::get();
    	$officialDetails = EmpOfficialDetails::get();
    	return view('superAdmin.dashboard', compact('details','officialDetails'));
    }
}
