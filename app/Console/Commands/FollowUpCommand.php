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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $expiringSoon = $this->getNextActionDate();
        if ($expiringSoon->isEmpty()) {
            $this->info('No follow-up actions found.');
            return;
        }
        foreach ($expiringSoon as $interaction) {

            if($interaction->notify_by_email) {
                echo 'Envío por email '."\n";
            }
            if($interaction->notify_by_whatsapp) {
                $nextActionDate = Carbon::parse($interaction->next_action_date);
                $expirationDate = Carbon::parse($interaction->expiration_date);
                WhatsAppSendingJob::dispatch(
                    $interaction->id,
                    $interaction->type,
                    $interaction->client->name,
                    $interaction->service->name,
                    $interaction->expiration_date,
                    $interaction->selling_price,
                    $interaction->client->phone,
                    (int)$nextActionDate->diffInDays($expirationDate)
                );
            }
        }

        $this->info('Follow-up command executed successfully! ');
    }
}
