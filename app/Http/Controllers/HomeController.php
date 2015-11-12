<?php namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function __construct()
    {
           $this->middleware('guest');
    }

    public function Index()
    {
        return View('Home/Index');
    }
}