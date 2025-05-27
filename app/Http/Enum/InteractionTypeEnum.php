<?php

namespace App\Http\Enum;

enum InteractionTypeEnum: string
{
    case START         = 'start'; // inicia el servicio
    case EXPIRATION    = 'expiration'; // Próxima expiración
    case PAYMENT       = 'payment'; // Pago pendiente
    case RENEWAL       = 'renewal'; // Renovación
    case REMINDER      = 'reminder'; // Recordatorio
    case THANK_YOU     = 'thank_you'; // Agradecimiento
    case NOTE          = 'note'; // Nota interna

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
