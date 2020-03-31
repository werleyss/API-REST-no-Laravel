<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoGruposTable extends Migration
{

    public function up()
    {
        Schema::create('produtoGrupos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('comissao',13,4)->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('produtoGrupos', function (Blueprint $table) {
            //
        });
    }
}
