<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('creation_date');

            $table->string('status');
            
            $table->integer('description_id')->unsigned();
            $table->foreign('description_id')->references('id')->on('descripcions');

            $table->integer('function_id')->unsigned();
            $table->foreign('function_id')->references('id')->on('funcions');

            $table->integer('nature_id')->unsigned();
            $table->foreign('nature_id')->references('id')->on('naturalezas');

            $table->integer('cost_center_id')->unsigned();
            $table->foreign('cost_center_id')->references('id')->on('centro_costos');

            $table->integer('official_id')->unsigned();
            $table->foreign('official_id')->references('id')->on('funcionarios');

            $table->double('release_value',15,2);

            $table->integer('creator_id')->unsigned();
            $table->foreign('creator_id')->references('id')->on('users');

            $table->integer('document_id')->unsigned();
            $table->foreign('document_id')->references('id')->on('documentos');

            $table->string('link');

            $table->date('pay_date');

            $table->integer('editor_id')->unsigned();
            $table->foreign('editor_id')->references('id')->on('users');

            $table->integer('payment_method_id')->unsigned();
            $table->foreign('payment_method_id')->references('id')->on('medio_pagos');

            $table->string('link2');

            $table->integer('origin_id')->unsigned();
            $table->foreign('origin_id')->references('id')->on('origens');

            $table->double('payment_value',15,2);
            $table->double('total',15,2);


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gastos');
    }
}
