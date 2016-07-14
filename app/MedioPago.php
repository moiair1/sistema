<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class MedioPago extends Model
{
    protected $table = "medio_pagos";

    protected $fillable = ['medioPago'];
}
