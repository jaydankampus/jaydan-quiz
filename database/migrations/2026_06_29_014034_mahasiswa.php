<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('Nim');
            $table->string('nama');
            $table->string('programstudi');
            $table->string('semester');
            $table->string('alamat');
            $table->string('nomortelpon');
            
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('mahasiswa');
    }
};
