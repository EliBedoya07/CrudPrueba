<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_categoria')->constrained()->onDelete('cascade'); // Clave foránea con eliminación en cascada
            $table->string('nombre', 200);
            $table->integer('cantidad');
            $table->decimal('precio', 10, 2);
            $table->timestamps();
            $table->softDeletes(); // Agrega la columna deleted_at para soft deletes
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
};