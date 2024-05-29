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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('foreId')->nullable();
            $table->string('namaRuangan');
            $table->string('fasilitas')->nullable();
            $table->smallInteger('ketersediaan')->default(0);
            $table->string('waktu')->nullable();
            $table->string('usedBy')->nullable();
            $table->string('usedFor')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
