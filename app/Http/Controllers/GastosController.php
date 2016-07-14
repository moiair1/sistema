<?php

namespace sistema\Http\Controllers;

use Illuminate\Http\Request;
use sistema\Http\Requests;

use sistema\Http\Controllers\Controller;
use sistema\CentroCosto;
use sistema\Descripcion;
use sistema\Documento;
use sistema\Funcion;
use sistema\Funcionario;
use sistema\Gastos;
use sistema\MedioPago;
use sistema\Naturaleza;
use sistema\Origen;
use sistema\User;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class GastosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $gastos = Gastos::Gastos();

        if ($request->ajax()) {
                 return response()->json(view('gastos.gastos',compact('gastos'))->render());
             }
         
        return view('gastos.index',compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centro_Costos = CentroCosto::lists('centroCosto','id');
        $descripcions = Descripcion::lists('descripcion','id');
        $documents = Documento::lists('documento','id');
        $funcions = Funcion::lists('funcion','id');
        $funcionarios = Funcionario::lists('funcionario','id');
        $medio_Pagos = MedioPago::lists('medioPago','id');
        $naturalezas = Naturaleza::lists('naturaleza','id');
        $origens = Origen::lists('origen','id');
        $users = User::lists('name','id');
        return view('gastos.create',compact('centro_Costos','descripcions','documents','funcions',
            'funcionarios','medio_Pagos','naturalezas','origens','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gastos::create($request->all());
        Session::flash('message','Gasto Agregada Correctamente');
        return Redirect::to('/gastos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gasto = Gastos::find($id);

        $this->notFound($gasto);

        $centro_Costos = CentroCosto::lists('centroCosto','id');
        $descripcions = Descripcion::lists('descripcion','id');
        $documents = Documento::lists('documento','id');
        $funcions = Funcion::lists('funcion','id');
        $funcionarios = Funcionario::lists('funcionario','id');
        $medio_Pagos = MedioPago::lists('medioPago','id');
        $naturalezas = Naturaleza::lists('naturaleza','id');
        $origens = Origen::lists('origen','id');
        $users = User::lists('name','id');
        return view('gastos.edit',['gasto'=>$gasto,'centro_Costos'=>$centro_Costos,'descripcions'=>$descripcions,
            'documents'=>$documents,'funcions'=>$funcions,'funcionarios'=>$funcionarios,'medio_Pagos'=>$medio_Pagos,
            'naturalezas'=>$naturalezas,'origens'=>$origens,'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gasto = Gastos::find($id);
        $gasto->fill($request->all());
        $gasto->save();
        Session::flash('message','Gasto Editado Correctamente');
        return Redirect::to('/gastos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gasto = Gastos::find($id);
        $gasto->delete();
        Session::flash('message','Gasto Eliminad Correctamente');
        return Redirect::to('/gastos');

        
    }
}
