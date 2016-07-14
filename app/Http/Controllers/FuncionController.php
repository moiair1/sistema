<?php

namespace sistema\Http\Controllers;

use sistema\Http\Requests;
use sistema\Http\Requests\FuncionCreateRequest;
use sistema\Http\Requests\FuncionUpdateRequest;
use sistema\Http\Controllers\Controller;
use sistema\Funcion;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class FuncionController extends Controller
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
        $funcions = Funcion::paginate(10);
        return view('funcion.index',compact('funcions'));
    }

    public function create()
    {
        return view('funcion.create');
    }

    public function store(FuncionCreateRequest $request)
    {
        Funcion::create($request->all());

        Session::flash('message','Funcion Agregado Correctamente');
        return Redirect::to('/funcion');
    }

    public function edit($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

         return view('usuario.edit',['user'=>$this->user]);
        */
        $funcion = Funcion::find($id);
        return view('funcion.edit',['funcion'=>$funcion]);
    }

    public function update($id, FuncionUpdateRequest $request)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');

        */

        $funcion = Funcion::find($id);
        $funcion->fill($request->all());
        $funcion->save();

        Session::flash('message','Funcion Editado Correctamente');
        return Redirect::to('/funcion');
    }

    public function destroy($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
        */

        $funcion = Funcion::find($id);
        $funcion->delete();

        Session::flash('message','Funcion Eliminado Correctamente');
        return Redirect::to('/funcion');
    }
}
