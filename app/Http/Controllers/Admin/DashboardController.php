<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        echo "Dashboard start";
    }
        
    
    public function index(){
        return '<h2>DASHBOARD WELLCOME</h2>';
    }
}