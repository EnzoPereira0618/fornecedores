<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('estoque', function (Blueprint $table) {
        $table->id(); // ID será a chave primária
        $table->integer('quantidade');
        $table->decimal('valor_unitario', 10, 2);

        // chave estrangeira referenciando cadastro
        $table->unsignedBigInteger('cadastro_id');
        $table->foreign('cadastro_id')->references('id')->on('cadastro');

        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};
