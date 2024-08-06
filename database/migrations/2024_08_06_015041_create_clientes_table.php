<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->increments('id_cliente');
        $table->string('nombre', 50);
        $table->string('apellido', 50);
        $table->string('email', 100);
        $table->string('telefono', 100);
        $table->date('fechaNac');
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
        Schema::dropIfExists('clientes');
    }
}
