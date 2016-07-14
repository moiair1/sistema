<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
USE DB;

class Gastos extends Model
{
    use SoftDeletes;
    protected $table = "gastos";

    protected $fillable = ['creation_date','status','description_id','function_id',
    'nature_id','cost_center_id','official_id','release_value','creator_id',
    'document_id','link','pay_date','editor_id','payment_method_id','link2',
    'origin_id','payment_value','total'];

    protected $dates = ['deleted_at'];

    public static function Gastos()
    {
    	return DB::table('gastos')
    	->join('centro_costos','centro_costos.id','=','gastos.cost_center_id')
    	->join('descripcions','descripcions.id','=','gastos.description_id')
    	->join('documentos','documentos.id','=','gastos.document_id')
    	->join('funcionarios','funcionarios.id','=','gastos.official_id')
    	->join('funcions','funcions.id','=','gastos.function_id')
    	->join('medio_pagos','medio_pagos.id','=','gastos.payment_method_id')
    	->join('naturalezas','naturalezas.id','=','gastos.nature_id')
    	->join('origens','origens.id','=','gastos.origin_id')
    	->join('users','users.id','=','gastos.creator_id')
    	//->join('users','users.id','=','gastos.editor_id')
    	->select('gastos.*','centro_costos.centroCosto','descripcions.descripcion',
    		'documentos.documento','funcionarios.funcionario','funcions.funcion',
    		'medio_pagos.medioPago','naturalezas.naturaleza','origens.origen','users.name')
        //->get()   tuve que deshabilitarlo por que no funciona junto con paginate
        ->paginate(100);

    }

}