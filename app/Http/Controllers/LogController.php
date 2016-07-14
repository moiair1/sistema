<?php

namespace sistema\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use sistema\Http\Requests;
use sistema\Http\Requests\LoginRequest;
use sistema\Http\Controllers\Controller;

class LogController extends Controller
{
     public function store(LoginRequest $request)
    {
    	if(Auth::attempt(['email' => $request['email'],'password' => $request['password']]))
    	{
    		return Redirect::to('admin');
    	}
    	Session::flash('message-error','Datos incorrectos');
    	return Redirect::to('/');
    }

    public function logout()
    {
    	Auth::logout();
    	return Redirect::to('/');
    }
}
