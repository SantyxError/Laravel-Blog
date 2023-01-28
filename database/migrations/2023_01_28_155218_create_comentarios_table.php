<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->text('contenido');
            $table->integer('autor_id');
            $table->integer('post_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
};
