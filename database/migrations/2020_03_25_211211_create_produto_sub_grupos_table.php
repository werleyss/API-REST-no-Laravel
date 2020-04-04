<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoSubGruposTable extends Migration
{

    public function up()
    {
        Schema::create('produtoSubGrupos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',120);
            $table->foreignId('produtoGrupos_id')->constrained()->nullable();
            $table->decimal('comissao',13,4)->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('produtoSubGrupos', function (Blueprint $table) {
            //
        });
    }
}
