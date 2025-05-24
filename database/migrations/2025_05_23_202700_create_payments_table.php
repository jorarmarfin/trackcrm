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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('interaction_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 8, 2);
            $table->string('method')->nullable(); // Efectivo, Yape, Plin, Transferencia
            $table->string('reference')->nullable(); // Código de operación, etc.
            $table->date('payment_date')->default(now());
            $table->text('notes')->nullable(); // Observaciones
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
