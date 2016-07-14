<?php

namespace sistema\Http\Controllers;

use Illuminate\Http\Request;

use sistema\Http\Requests;
use sistema\Http\Controllers\Controller;

use sistema\Gastos;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'admin']);

    }


    public function index()
    {
    	return view('index');
    }

    public function contacto()
    {
    	return view('contacto');
    }

    public function reviews()
    {
    	return view('reviews');
    }

    public function admin()
    {
        return view('admin/index');
    }

}
