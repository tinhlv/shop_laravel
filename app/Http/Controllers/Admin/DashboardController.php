<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{
    
    public function __construct() {
    	$this->middleware('auth');
    }

    public function getIndex() {
    	return view ('admin.pages.dashboard');
    }
}
