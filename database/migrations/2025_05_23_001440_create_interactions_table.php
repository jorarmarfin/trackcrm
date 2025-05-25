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
        Schema::create('interactions', function (Blueprint $table) {
            $table->id();

            // Relaciones
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('cascade');

            // Datos financieros
            $table->integer('quantity')->nullable();
            $table->decimal('cost_price', 10, 2)->nullable();
            $table->decimal('selling_price', 10, 2)->nullable();
            $table->decimal('gross_profit', 10, 2)->nullable();

            // Fechas de control
            $table->date('expiration_date')->nullable();       // Fecha de expiración del servicio
            $table->date('next_action_date')->nullable();      // Para seguimiento
            $table->timestamp('notified_at')->nullable();      // Registro de última notificación enviada

            // Notificación
            $table->boolean('notify_by_whatsapp')->default(true);
            $table->boolean('notify_by_email')->default(true);

            // Tipo de interacción (para lógica de negocio y mensajes personalizados)
            $table->string('type')->default('nota');//expiración, cobro, renovación, recordatorio, agradecimiento, nota

            // Observaciones
            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interactions');
    }
};
