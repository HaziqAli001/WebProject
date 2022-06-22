<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class data extends Controller
{
    public function home()
    {
        return View('welcome');
    }
    public function team()
    {
        return View('team');
    }
    public function specialdishes()
    {
        return View('specialdish');
    }
    public function menu()
    {
        return View('menu');
    }
    public function payment()
    {
        return View('payment');
    }
    public function about()
    {
        return View('about');
    }
    public function reservation()
    {
        return View('reservation');
    }
    public function signin()
    {
        return View('signin');
    }
    public function signup()
    {
        return View('signup');
    }
    public function booktable()
    {
        return View('booktable');
    }
    public function navigation()
    {
        return View('navigation');
    }

    public function accounts()
    {
        return View('accounts');
    }
    public function dashboard()
    {
        return View('dashboard');
    }
    public function dishedit()
    {
        return View('dishedit');
    }
    public function dishes()
    {
        return View('dishes');
    }
    public function orderdetail()
    {
        return View('orderdetail');
    }
    public function orders()
    {
        return View('orders');
    }
    public function reservationadmin()
    {
        return View('reservationadmin');
    }
    public function teamadmin()
    {
        return View('teamadmin');
    }
    public function teamedit()
    {
        return View('teamedit');
    }
}
