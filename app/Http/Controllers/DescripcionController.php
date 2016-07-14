<?php

namespace sistema\Http\Controllers;

use sistema\Http\Requests;
use sistema\Http\Requests\DescripcionCreateRequest;
use sistema\Http\Requests\DescripcionUpdateRequest;
use sistema\Http\Controllers\Controller;
use sistema\Descripcion;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DescripcionController extends Controller
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
        $descripcions = Descripcion::paginate(10);
        return view('descripcion.index',compact('descripcions'));
    }

    public function create()
    {
        return view('descripcion.create');
    }

    public function store(DescripcionCreateRequest $request)
    {
        Descripcion::create($request->all());

        Session::flash('message','Descripcion Agregado Correctamente');
        return Redirect::to('/descripcion');
    }

    public function edit($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

         return view('usuario.edit',['user'=>$this->user]);
        */
        $descripcion = Descripcion::find($id);
        return view('descripcion.edit',['descripcion'=>$descripcion]);
    }

    public function update($id, DescripcionUpdateRequest $request)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');

        */

        $descripcion = Descripcion::find($id);
        $descripcion->fill($request->all());
        $descripcion->save();

        Session::flash('message','Descripcion Editado Correctamente');
        return Redirect::to('/descripcion');
    }

    public function destroy($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
        */

        $descripcion = Descripcion::find($id);
        $descripcion->delete();

        Session::flash('message','Descripcion Eliminado Correctamente');
        return Redirect::to('/descripcion');
    }
}
