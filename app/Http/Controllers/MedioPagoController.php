<?php

namespace sistema\Http\Controllers;

use sistema\Http\Requests;
use sistema\Http\Requests\MedioPagoCreateRequest;
use sistema\Http\Requests\MedioPagoUpdateRequest;
use sistema\Http\Controllers\Controller;
use sistema\MedioPago;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MedioPagoController extends Controller
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
        $medioPagos = MedioPago::paginate(10);
        return view('medioPago.index',compact('medioPagos'));
    }

    public function create()
    {
        return view('medioPago.create');
    }

    public function store(MedioPagoCreateRequest $request)
    {
        MedioPago::create($request->all());

        Session::flash('message','Medio de Pago Agregado Correctamente');
        return Redirect::to('/medioPago');
    }

    public function edit($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

         return view('usuario.edit',['user'=>$this->user]);
        */
        $medioPago = MedioPago::find($id);
        return view('medioPago.edit',['medioPago'=>$medioPago]);
    }

    public function update($id, MedioPagoUpdateRequest $request)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');

        */

        $medioPago = MedioPago::find($id);
        $medioPago->fill($request->all());
        $medioPago->save();

        Session::flash('message','Medio de Pago Editado Correctamente');
        return Redirect::to('/medioPago');
    }

    public function destroy($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
        */

        $medioPago = MedioPago::find($id);
        $medioPago->delete();

        Session::flash('message','Medio de Pago Eliminado Correctamente');
        return Redirect::to('/medioPago');
    }
}
