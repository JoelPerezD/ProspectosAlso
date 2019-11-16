<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555355681975ProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
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
        Schema::dropIfExists('products');
    }
}
