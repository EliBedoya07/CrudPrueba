<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200);
            $table->string('descripcion', 200)->nullable();
            $table->timestamps();
            $table->softDeletes(); // Agrega la columna deleted_at para soft deletes
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
};
