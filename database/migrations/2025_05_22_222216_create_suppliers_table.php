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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Ej: SMTP2GO, Izipay, Mailersend
            $table->string('contact_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('period')->default('month'); // true = activo
            $table->string('currency')->default('S/.'); // true = activo
            $table->decimal('cost_price', 8, 2)->default(0.00); // Precio de costo del servicio
            $table->text('notes')->nullable(); // Información adicional: credenciales, etc.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
