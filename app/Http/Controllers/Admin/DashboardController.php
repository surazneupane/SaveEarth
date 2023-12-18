<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $data = [];

        $data['title'] = 'Dashboard';

        return view('admins.dashboard.index',compact('data'));
    }
}
