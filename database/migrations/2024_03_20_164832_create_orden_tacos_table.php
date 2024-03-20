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
        Schema::create('orden_tacos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->integer('al_pastor')->default(0);
            $table->integer('de_carnitas')->default(0);
            $table->integer('de_bistec')->default(0);
            $table->integer('de_barbacoa')->default(0);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('orden_tacos');
    }
};
