<div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">
            Servicios próximos a vencer
        </h2>
        <a href="{{route('modules.interactions.index')}}" class="text-sm text-blue-600 hover:underline">
            {{ __('ver todos') }}
        </a>
    </div>

    @if($interactions->isEmpty())
        <p class="text-neutral-500 dark:text-neutral-400">{{ __('No services to be completed.') }}</p>
    @else
        <ul class="space-y-2">
            @foreach($interactions as $interaction)
                <li class="flex items-center justify-between p-2 bg-white dark:bg-neutral-800 rounded-lg shadow-sm">
                    <div>
                        <span class="text-sm text-neutral-900 dark:text-neutral-100">{{ $interaction->service->name }}</span>
                        <br>
                        <span class="text-xs text-neutral-500 dark:text-neutral-400">{{ $interaction->client->name }}</span>
                        |
                        <span class="text-xs text-neutral-500 dark:text-neutral-400">{{ $interaction->expiration_date }}</span>
                    </div>
                    <span class="text-xs text-neutral-500 dark:text-neutral-400">{{ $interaction->next_action_date }}</span>
                </li>
            @endforeach
        </ul>
    @endif
</div>
