<?php

namespace sistema\Http\Controllers;

use sistema\Http\Requests;
use sistema\Http\Requests\CentroCostoCreateRequest;
use sistema\Http\Requests\CentroCostoUpdateRequest;
use sistema\Http\Controllers\Controller;
use sistema\CentroCosto;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CentroCostoController extends Controller
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
        $centroCostos = CentroCosto::paginate(10);
        return view('centroCosto.index',compact('centroCostos'));
    }

    public function create()
    {
        return view('centroCosto.create');
    }

    public function store(CentroCostoCreateRequest $request)
    {
        CentroCosto::create($request->all());

        Session::flash('message','Centro de Costo Agregado Correctamente');
        return Redirect::to('/centroCosto');
    }

    public function edit($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

         return view('usuario.edit',['user'=>$this->user]);
        */
        $centroCosto = CentroCosto::find($id);
        return view('centroCosto.edit',['centroCosto'=>$centroCosto]);
    }

    public function update($id, CentroCostoUpdateRequest $request)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');

        */

        $centroCosto = CentroCosto::find($id);
        $centroCosto->fill($request->all());
        $centroCosto->save();

        Session::flash('message','Centro de Costo Editado Correctamente');
        return Redirect::to('/centroCosto');
    }

    public function destroy($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
        */

        $centroCosto = CentroCosto::find($id);
        $centroCosto->delete();

        Session::flash('message','Centro de Costo Eliminado Correctamente');
        return Redirect::to('/centroCosto');
    }
}
