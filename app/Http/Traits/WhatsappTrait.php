<?php

namespace App\Http\Traits;

use App\Services\WaveConnectedService;

trait WhatsappTrait
{
    public function sendWhatsPreventiveToEndService($name, $service,$expiration_date,$amount, $phone): void
    {
        $message = <<<MSG
            ¡Hola *$name*! 😊 Solo quería avisarte que el servicio que estás utilizando está próximo a finalizar.

            🧾 Servicio: *$service*
            🗓️ Fecha de finalización: *$expiration_date*
            💰 Monto: *S/ $amount*

            Si estás pensando en renovar o tienes alguna consulta, no dudes en escribirme. Estoy para ayudarte ✨

            🔸 Puedes hacer el pago por los siguientes medios:

            *Yape*
            📱 992 949 424

            🏦 *Cuenta BCP – Soles*
            📄 N°: 191-99394001-0-79
            🔢 CCI: 00219119939400107951
            👤 A nombre de: Luis Mayta Campos

            💵 *Cuenta BCP – Dólares*
            📄 N°: 19175463792150
            🔢 CCI: 00219117546379215054

            🏦 *Cuenta Interbank – Soles*
            📄 N°: 898-3301445476
            🔢 CCI: 003-898-013301445476-42

            Gracias de antemano por tu atención 🙏
            Un abrazo,
            — Luis Mayta
            MSG;

        $this->sendMessageWhats($phone, $message);
    }
    public function sendWhatsPreventiveToEndServiceTomorrow($name, $service, $expiration_date,$amount, $phone): void
    {
        $message = <<<MSG
            ¡Hola *$name*! ⏰ Solo quería recordarte que *mañana finaliza* el servicio que estás utilizando:

            🧾 Servicio: *$service*
            🗓️ Fecha de finalización: $expiration_date
            💰 Monto: *S/ $amount*

            Si estás pensando en renovar o tienes alguna consulta, no dudes en escribirme. Estoy para ayudarte ✨
            🔸 Puedes hacer el pago por los siguientes medios:

            *Yape*
            📱 992 949 424

            🏦 *Cuenta BCP – Soles*
            📄 N°: 191-99394001-0-79
            🔢 CCI: 00219119939400107951
            👤 A nombre de: Luis Mayta Campos

            💵 *Cuenta BCP – Dólares*
            📄 N°: 19175463792150
            🔢 CCI: 00219117546379215054

            🏦 *Cuenta Interbank – Soles*
            📄 N°: 898-3301445476
            🔢 CCI: 003-898-013301445476-42

            Gracias de antemano por tu atención 🙏
            Un abrazo,
            — Luis Mayta
            MSG;

        $this->sendMessageWhats($phone, $message);
    }
    public function sendWhatsTodayEndService($name, $service, $expiration_date,$amount, $phone): void
    {
        $message = <<<MSG
            ¡Hola *$name*! ⏰ Solo quería recordarte que *hoy finaliza* el servicio que estás utilizando:

            🧾 Servicio: *$service*
            🗓️ Fecha de finalización: $expiration_date
            💰 Monto: *S/ $amount*

            Si estás pensando en renovar o tienes alguna consulta, no dudes en escribirme. Estoy para ayudarte ✨
            🔸 Puedes hacer el pago por los siguientes medios:

            *Yape*
            📱 992 949 424

            🏦 *Cuenta BCP – Soles*
            📄 N°: 191-99394001-0-79
            🔢 CCI: 00219119939400107951
            👤 A nombre de: Luis Mayta Campos

            💵 *Cuenta BCP – Dólares*
            📄 N°: 19175463792150
            🔢 CCI: 00219117546379215054

            🏦 *Cuenta Interbank – Soles*
            📄 N°: 898-3301445476
            🔢 CCI: 003-898-013301445476-42

            Gracias de antemano por tu atención 🙏
            Un abrazo,
            — Luis Mayta
            MSG;

        $this->sendMessageWhats($phone, $message);
    }
    public function sendMessageWhats($phone, $message): void
    {
        $res1 = (new WaveConnectedService)->apiSendWhatsapp($phone, $message);
        if ($res1) {
            echo "Mensaje enviado\n".json_encode($res1);
        } else {
            echo "Error al enviar mensaje\n";
        }
    }


}
