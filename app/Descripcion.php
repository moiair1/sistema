<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Descripcion extends Model
{
    protected $table = "descripcions";

    protected $fillable = ['descripcion'];
}
