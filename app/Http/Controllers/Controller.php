<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mobile() {
        $api_file = storage_path('app\mobirace-3f0df-firebase-adminsdk-f6p60-cbb4e40e25.json');
        $factory = (new Factory)->withServiceAccount($api_file);
        $messaging = $factory->createMessaging();

        $deviceToken = 'dlE8UD2bTDeDERsjrKaHH5:APA91bENYXsL1JvP-oriZJhne8oMjgki6wTL3SbW1L0RYBcYKlF7lESXmK2oip-UfLD7lRxVFa8by5ygXs2LngQGg2TB69aD5kiNrbbtl5JWS3B7b6Uk4CYUvOeSJXbLv0kwiscDP6i4';

        $data = [
            'title' => 'Le Dien Tam',
            'body' => 'Nguyen Van Troi'
        ];

        $message = CloudMessage::fromArray([
            'token' => $deviceToken,
            'notification' => $data, // optional
            'data' => $data, // optional
        ]);


        $result = $messaging->send($message);
        dd($result);
    }
}
