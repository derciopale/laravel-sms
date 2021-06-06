<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('b3fb5527', 'iH6wvVsNCCt8scvs');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '+258840394038',
            'from' => 'Pale Beatz',
            'text' => 'Ola Mundo!'
        ]);
 
        dd('Mensagem enviada.');
    }
}
