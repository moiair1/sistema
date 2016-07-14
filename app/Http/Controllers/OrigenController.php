<?php

namespace sistema\Http\Controllers;

use sistema\Http\Requests;
use sistema\Http\Requests\OrigenCreateRequest;
use sistema\Http\Requests\OrigenUpdateRequest;
use sistema\Http\Controllers\Controller;
use sistema\Origen;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class OrigenController extends Controller
{
      /*
   public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['create', 'edit']]);

    }
   
Se intento usar estas funciones para reducir el codigo, pero en la version 5.2 no funciono
por ende fue comentado este codigo

    public function __construct()
    {
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }

    public function find(Route $route)
    {
        $this->user = User::find($route->getParameter('usuario'));
    }
*/

    public function index()
    {
        $origens = Origen::paginate(10);
        return view('origen.index',compact('origens'));
    }

    public function create()
    {
        return view('origen.create');
    }

    public function store(OrigenCreateRequest $request)
    {
        Origen::create($request->all());

        Session::flash('message','Origen Agregado Correctamente');
        return Redirect::to('/origen');
    }

    public function edit($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

         return view('usuario.edit',['user'=>$this->user]);
        */
        $origen = Origen::find($id);
        return view('origen.edit',['origen'=>$origen]);
    }

    public function update($id, OrigenUpdateRequest $request)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');

        */

        $origen = Origen::find($id);
        $origen->fill($request->all());
        $origen->save();

        Session::flash('message','Origen Editado Correctamente');
        return Redirect::to('/origen');
    }

    public function destroy($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
        */

        $origen = Origen::find($id);
        $origen->delete();

        Session::flash('message','Origen Eliminado Correctamente');
        return Redirect::to('/origen');
    }
}
