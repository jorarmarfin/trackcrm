<?php

namespace App\Http\Enum;

enum InteractionTypeEnum: string
{
    case START         = 'start'; // Start of service
    case EXPIRATION    = 'expiration'; // Upcoming expiration
    case PAYMENT       = 'payment'; // Pending payment
    case RENEWAL       = 'renewal'; // Renewal
    case REMINDER      = 'reminder'; // Reminder
    case THANK_YOU     = 'thank_you'; // Thank you
    case NOTE          = 'note'; // Internal note

    public function label(): string
    {
        return match ($this) {
            self::START       => 'Start of service',
            self::EXPIRATION  => 'Upcoming expiration',
            self::PAYMENT     => 'Pending payment',
            self::RENEWAL     => 'Renewal',
            self::REMINDER    => 'Reminder',
            self::THANK_YOU   => 'Thank you',
            self::NOTE        => 'Internal note',
        };
    }

    public static function options(): array
    {
        return array_column(self::cases(), 'value');
    }
}
