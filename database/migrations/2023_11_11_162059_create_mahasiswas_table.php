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
    Schema::create('mahasiswas', function (Blueprint $table) {
        $table->string('nim')->primary();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('no_hp')->unique();
        $table->foreignId('id_jurusan')->constrained('jurusans');
    });
    
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
