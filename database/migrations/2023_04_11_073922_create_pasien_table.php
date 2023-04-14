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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm', 20)->nullable(false);
            $table->string('nama_pasien', 50)->nullable(false);
            $table->string('alamat', 50)->nullable();
            $table->string('jk',10)->nullable(false);
            $table->integer('no_hp')->nullable();
            $table->date('tgl_lahir')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
