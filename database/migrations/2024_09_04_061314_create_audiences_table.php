<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('audiences', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->text('alamat_domisili');
            $table->string('no_whatsapp', 16);
            $table->string('no_kursi', 3);
            $table->string('no_tiket', 10)->default(Str::random(10));
            $table->enum('jenis_tiket', ['regular', 'vip'])->default('regular');
            $table->boolean('status_kehadiran')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audiences');
    }
};
