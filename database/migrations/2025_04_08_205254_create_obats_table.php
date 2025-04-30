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
<<<<<<< HEAD
{
    Schema::create('obats', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('nama_obat', 50);  // Pastikan nama sesuai dengan model
        $table->string('kemasan', 35);
        $table->integer('harga')->nullable();
    });
}
=======
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_obat')->max(50);
            $table->string('kemasan')->max(35);
            $table->integer('harga')->nullable();

        });
    }
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
