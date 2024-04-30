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
        Schema::table('cobros_fac', function (Blueprint $table) {
            $table->string('nombre_cliente')->nullable();
            $table->string('recibido_admin')->nullable();
            $table->string('recibido_supervisor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cobros_fac', function (Blueprint $table) {
            $table->dropColumn(['recibido_admin', 'recibido_supervisor']);
            $table->dropTimestamps();
        });
    }
};
