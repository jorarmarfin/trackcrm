<?php

namespace App\Console\Commands;

use App\Http\Traits\InteractionsTrait;
use Illuminate\Console\Command;

class FollowUpCommand extends Command
{
    use InteractionsTrait;
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
        $this->info('Follow-up command executed successfully! ');
    }
}
