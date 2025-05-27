<?php

namespace App\Jobs;

use App\Http\Enum\InteractionTypeEnum;
use App\Http\Traits\InteractionsTrait;
use App\Http\Traits\WhatsappTrait;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class WhatsAppSendingJob implements ShouldQueue
{
    use Queueable,WhatsappTrait,InteractionsTrait;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public int $interaction_id,
        public string $type,
        public string $name,
        public string $service,
        public string $expiration_date,
        public float $amount,
        public string $phone,
        public int $days
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Verificar si es un tipo de interacción válido
        if (!in_array($this->type, [InteractionTypeEnum::START->value, InteractionTypeEnum::RENEWAL->value])) {
            return;
        }

        // Procesar según los días restantes
        match($this->days) {
            5 => $this->sendFiveDaysNotification(),
            1 => $this->sendOneDayNotification(),
            default => null
        };
    }
    private function sendNotification(callable $sendMethod, array $updateFields): void
    {
        $sendMethod(
            $this->name,
            $this->service,
            $this->expiration_date,
            $this->amount,
            $this->phone
        );

        $this->updateInteractionFieldValue($this->interaction_id, $updateFields);
    }

    public function sendFiveDaysNotification(): void
    {
        $this->sendNotification(
            [$this, 'sendWhatsPreventiveToEndService'],
            [
                'notified_at' => now(),
                'next_action_date' => now()->addDays(4)
            ]
        );
    }

    public function sendOneDayNotification(): void
    {
        $this->sendNotification(
            [$this, 'sendWhatsPreventiveToEndServiceTomorrow'],
            ['notified_at' => now()]
        );
    }
}
