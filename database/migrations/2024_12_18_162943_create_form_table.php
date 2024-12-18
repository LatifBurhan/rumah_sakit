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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('no_rm')->unique()->nullable();
            // $table->integer('nim_pasien')->nullable();
            $table->string('alamat');
            // $table->string('tgl_lahir')->nullable();
            $table->string('alergi');
            // $table->string('kelamin')->nullable();
            $table->foreignId("provinsi_id")->constrained("provinsi")->cascadeOnUpdate();
            $table->foreignId("kota_id")->constrained("kota")->cascadeOnUpdate();
            $table->string('pendapatan');
            $table->string('golongan_darah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
