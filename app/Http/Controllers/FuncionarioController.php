<?php

namespace sistema\Http\Controllers;

use sistema\Http\Requests;
use sistema\Http\Requests\FuncionarioCreateRequest;
use sistema\Http\Requests\FuncionarioUpdateRequest;
use sistema\Http\Controllers\Controller;
use sistema\Funcionario;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class FuncionarioController extends Controller
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
        $funcionarios = Funcionario::paginate(10);
        return view('funcionario.index',compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionario.create');
    }

    public function store(FuncionarioCreateRequest $request)
    {
        Funcionario::create($request->all());

        Session::flash('message','Funcionario Agregado Correctamente');
        return Redirect::to('/funcionario');
    }

    public function edit($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

         return view('usuario.edit',['user'=>$this->user]);
        */
        $funcionario = Funcionario::find($id);
        return view('funcionario.edit',['funcionario'=>$funcionario]);
    }

    public function update($id, FuncionarioUpdateRequest $request)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');

        */

        $funcionario = Funcionario::find($id);
        $funcionario->fill($request->all());
        $funcionario->save();

        Session::flash('message','Funcionario Editado Correctamente');
        return Redirect::to('/funcionario');
    }

    public function destroy($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
        */

        $funcionario = Funcionario::find($id);
        $funcionario->delete();

        Session::flash('message','Funcionario Eliminado Correctamente');
        return Redirect::to('/funcionario');
    }
}
