<?php

namespace App\Traits;

use App\Services\WaveConnectedService;

trait WhatsappTrait
{
    public function sendWhatsPreventiveToEndService($name, $service,$expiration_date, $phone): void
    {
        $message = <<<MSG
            ¡Hola $name! 😊 Solo quería avisarte que el servicio que estás utilizando está próximo a finalizar.

            🧾 Servicio: $service
            🗓️ Fecha de finalización: $expiration_date

            Si estás pensando en renovar o tienes alguna consulta, no dudes en escribirme. Estoy para ayudarte ✨

            Un abrazo,
            — Luis
            MSG;

        $res1 = (new WaveConnectedService)->apiSendWhatsapp($phone, $message);
        if ($res1) {
            echo "Mensaje enviado\n";
        } else {
            echo "Error al enviar mensaje\n";
        }
    }


}
