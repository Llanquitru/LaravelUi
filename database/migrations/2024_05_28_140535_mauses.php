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
        Schema::create('mauses', function (Blueprint $table) {
            $table->id();
            $table->string('marca_raton');
            $table->string('serial_raton');
            $table->string('tipo_raton');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /** $table->string('tipo_raton');
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
