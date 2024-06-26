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

            // // $table->id();
            // $table->string('numero_rc')->nullable();
            // $table->date('date_cobro')->nullable();
            // $table->string('num_factura')->nullable();
            // $table->string('cobro_abono')->nullable();
            // $table->string('abono')->nullable();
            // $table->string('descuento')->nullable();
            // $table->string('retencion')->nullable();
            // $table->string('devolucion')->nullable();
            // $table->string('metodo_pago')->nullable();
            // $table->string('informacion')->nullable();

            
            $table->string('nombre_cliente')->nullable();
            $table->string('email_cliente')->nullable();
            $table->string('recibido_admin')->nullable();
            $table->string('recibido_supervisor')->nullable();
            $table->string('estado_rc')->nullable();
            $table->string('cobrado_por')->nullable();
            $table->string('estado_dinero')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cobros_fac', function (Blueprint $table) {

             
            $table->dropColumn('nombre_cliente');
            $table->dropColumn('email_cliente');
            $table->dropColumn('recibido_admin');
            $table->dropColumn('recibido_supervisor');
            $table->dropColumn('estado_rc');
            $table->dropColumn('cobrado_por');
            $table->dropColumn('estado_dinero');

            // $table->id();
            // $table->dropColumn('numero_rc');
            // $table->dropColumn('date_cobro');
            // $table->dropColumn('num_factura');
            // $table->dropColumn('cobro_abono');
            // $table->dropColumn('abono');
            // $table->dropColumn('descuento');
            // $table->dropColumn('retencion');
            // $table->dropColumn('devolucion');
            // $table->dropColumn('metodo_pago');
            // $table->dropColumn('informacion');
            // $table->dropTimestamps();
        });
    }
};
