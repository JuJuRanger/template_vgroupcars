<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Customer;
use App\Model\Purchasecar;
use App\Model\Salecar;
use App\Model\Tracking;
use App\User;

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
    public function dashboard_management(){
        $countRowCustomer = Customer::count();
        $countRowPurchasecar = Purchasecar::count();
        $countRowSalecar = Customer::count();
        $countRowTracking = Tracking::count();
        $countRowUser = User::count();
        return view('backend.pages.dashboard_management', [
            'countRowCustomer' => $countRowCustomer,
            'countRowPurchasecar' => $countRowPurchasecar,
            'countRowSalecar' => $countRowSalecar,
            'countRowTracking' => $countRowTracking,
            'countRowUser' => $countRowUser,
        ]);
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
