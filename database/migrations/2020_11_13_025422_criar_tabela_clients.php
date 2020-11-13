<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table ) {
           $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('dateOfBirth');
            $table->string('cep');
            $table->string('address');
            $table->string('neighborhood');
            $table->string('referencePoint');
            $table->string('mail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
