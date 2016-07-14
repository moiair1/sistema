<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Naturaleza extends Model
{
    protected $table = "naturalezas";

    protected $fillable = ['naturaleza'];
}
