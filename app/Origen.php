<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    protected $table = "origens";

    protected $fillable = ['origen'];
}
