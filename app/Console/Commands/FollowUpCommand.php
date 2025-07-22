<?php

namespace App\Console\Commands;

use App\Http\Traits\InteractionsTrait;
use App\Http\Traits\WhatsappTrait;
use App\Jobs\WhatsAppSendingJob;
use Carbon\Carbon;
use Illuminate\Console\Command;

class FollowUpCommand extends Command
{
    use InteractionsTrait, WhatsappTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:follow-up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envía notificaciones de seguimiento para interacciones que vencen pronto';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Iniciando proceso de seguimiento de interacciones...');

        $expiringSoon = $this->getNextActionDate();
        if ($expiringSoon->isEmpty()) {
            $this->info('No se encontraron acciones de seguimiento pendientes.');
            return;
        }

        $this->info('Se encontraron ' . $expiringSoon->count() . ' interacciones que requieren seguimiento.');

        $emailCount = 0;
        $whatsappCount = 0;

        $this->output->progressStart($expiringSoon->count());

        foreach ($expiringSoon as $interaction) {
            if($interaction->notify_by_email) {
                $emailCount++;
                if ($this->output->isVerbose()) {
                    $this->line(' - Encolando email para: ' . $interaction->client->name . ' - Servicio: ' . $interaction->service->name);
                }
            }

            if($interaction->notify_by_whatsapp) {
                $whatsappCount++;
                $nextActionDate = Carbon::parse($interaction->next_action_date);
                $expirationDate = Carbon::parse($interaction->expiration_date);
                $diasRestantes = (int)$nextActionDate->diffInDays($expirationDate);

                $this->line(' - Días restantes: ' . $diasRestantes);

                if ($this->output->isVerbose()) {
                    $this->line(' - Encolando WhatsApp para: ' . $interaction->client->name . ' - Servicio: ' . $interaction->service->name);
                }

                WhatsAppSendingJob::dispatch(
                    $interaction->id,
                    $interaction->type,
                    $interaction->client->name,
                    $interaction->service->name,
                    $interaction->expiration_date,
                    $interaction->selling_price,
                    $interaction->client->phone,
                    $diasRestantes
                );
            }

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->newLine();
        $this->info('Resumen de la ejecución:');
        $this->info('✓ Interacciones procesadas: ' . $expiringSoon->count());
        $this->info('✓ Notificaciones por email: ' . $emailCount);
        $this->info('✓ Notificaciones por WhatsApp: ' . $whatsappCount);
        $this->info('Comando ejecutado correctamente.');
    }
}
