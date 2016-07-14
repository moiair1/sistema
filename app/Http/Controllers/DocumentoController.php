<?php

namespace sistema\Http\Controllers;

use sistema\Http\Requests;
use sistema\Http\Requests\DocumentoCreateRequest;
use sistema\Http\Requests\DocumentoUpdateRequest;
use sistema\Http\Controllers\Controller;
use sistema\Documento;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DocumentoController extends Controller
{    /*
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
        $documentos = Documento::paginate(10);
        return view('documento.index',compact('documentos'));
    }

    public function create()
    {
        return view('documento.create');
    }

    public function store(DocumentoCreateRequest $request)
    {
        Documento::create($request->all());

        Session::flash('message','Documento Agregado Correctamente');
        return Redirect::to('/documento');
    }

    public function edit($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

         return view('usuario.edit',['user'=>$this->user]);
        */
        $documento = Documento::find($id);
        return view('documento.edit',['documento'=>$documento]);
    }

    public function update($id, DocumentoUpdateRequest $request)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');

        */

        $documento = Documento::find($id);
        $documento->fill($request->all());
        $documento->save();

        Session::flash('message','Documento Editado Correctamente');
        return Redirect::to('/documento');
    }

    public function destroy($id)
    {
        /*
        Codigo que se usaria con el constructor y si funcionara el beforeFilter en 5.2

        $this->user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
        */

        $documento = Documento::find($id);
        $documento->delete();

        Session::flash('message','Documento Eliminado Correctamente');
        return Redirect::to('/documento');
    }
}
