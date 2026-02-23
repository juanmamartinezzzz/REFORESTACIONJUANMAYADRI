<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('evento_usuario', function (Blueprint $table) {
        $table->id();
        $table->foreignId('usuario_id')->constrained('usuarios');
        $table->foreignId('evento_id')->constrained('eventos');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
