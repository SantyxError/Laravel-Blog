<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {  //creamos la accion en la tabla 'posts'
            $table->integer('autor_id'); //insertamos el campo 'autor_id'
        });
        //
    }


    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('autor_id');
        });
    }
};
