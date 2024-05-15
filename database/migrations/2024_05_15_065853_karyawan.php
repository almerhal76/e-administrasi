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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('password');
            $table->text('alamat');
            $table->string('no_hp');
            $table->string('gender');
            $table->string('profile_photo_path', 2048)->nullable();
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
