<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = "documentos";

    protected $fillable = ['documento'];
}
