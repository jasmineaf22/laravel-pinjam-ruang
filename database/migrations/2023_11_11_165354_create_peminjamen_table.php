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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ruangan')->constrained('ruangans');
            $table->string('nim')->index();
            $table->foreign('nim')->references('nim')->on('mahasiswas');
            $table->string('organisasi');
            $table->string('acara');
            $table->date('tanggal');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
