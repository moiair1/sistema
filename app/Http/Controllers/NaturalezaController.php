<?php

namespace sistema\Http\Controllers;

use sistema\Http\Requests;
use sistema\Http\Requests\NaturalezaCreateRequest;
use sistema\Http\Requests\NaturalezaUpdateRequest;
use sistema\Http\Controllers\Controller;
use sistema\Naturaleza;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class NaturalezaController extends Controller
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
        $naturalezas = Naturaleza::paginate(10);
        return view('naturaleza.index',compact('naturalezas'));
    }

    public function create()
    {
        return view('naturaleza.create');
    }

    public function store(NaturalezaCreateRequest $request)
    {
        Naturaleza::create($request->all());

        Session::flash('message','Naturaleza Agregado Correctamente');
        return Redirect::to('/naturaleza');
    }

    public function edit($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

         return view('usuario.edit',['user'=>$this->user]);
        */
        $naturaleza = Naturaleza::find($id);
        return view('naturaleza.edit',['naturaleza'=>$naturaleza]);
    }

    public function update($id, NaturalezaUpdateRequest $request)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');

        */

        $naturaleza = Naturaleza::find($id);
        $naturaleza->fill($request->all());
        $naturaleza->save();

        Session::flash('message','Naturaleza Editado Correctamente');
        return Redirect::to('/naturaleza');
    }

    public function destroy($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
        */

        $naturaleza = Naturaleza::find($id);
        $naturaleza->delete();

        Session::flash('message','Naturaleza Eliminado Correctamente');
        return Redirect::to('/naturaleza');
    }
}
