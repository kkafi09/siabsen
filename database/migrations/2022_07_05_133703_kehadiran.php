<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->enum('role', ['admin', 'guru', 'siswa'])->default('siswa');
            $table->enum('status', ['masuk', 'sakit', 'izin', 'dispensasi', 'alpha']);
            $table->time('start_time');
            $table->time('end_time')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kehadiran');
    }
};
