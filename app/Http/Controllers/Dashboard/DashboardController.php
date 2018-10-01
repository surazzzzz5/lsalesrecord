<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $data = array(
            'heading' => 'Dashboard',
            'subheading' => 'Dashboard',
            'brname'=>'home'
        ); 
        return view('dashboard.dashboard')->with($data);;
    }
}
