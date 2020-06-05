<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('backend.pages.dashboard');
    }
    public function blank(){
        return view('backend.pages.blank');
    }
    public function dashboard(){
        return view('backend.pages.dashboard');
    }
    public function profile(){
        return view('backend.pages.profile');
    }
    public function reports(){
        return view('backend.pages.reports');
    }
    public function users(){
        return view('backend.pages.users');
    }
    public function settings(){
        return view('backend.pages.settings');
    }
    public function nopermission(){
        return view('backend.pages.nopermission');
    }
}
