<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations el comando para correr la mi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RazonSocial');
            $table->string('Giro');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Zona');
            $table->string('Ciudad');
            $table->string('Estado');
            $table->string('Contacto');
            $table->string('Correo');
           // $table->longText('description')->nullable();
            //$table->decimal('price', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}