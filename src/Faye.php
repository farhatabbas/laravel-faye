<?php namespace Farhatabbas\Faye;

class Faye
{

    public static function message($channel, $data = [], $ext = [])
    {

        //compose Faye server url
        $url = 'http://' . config('faye.host') . ':' . config('faye.port') . '/' . config('faye.mount');

        //compose body
        $body = json_encode([
            'channel' => $channel,
            'data' => $data,
            'ext' => $ext,
        ]);

        //composer post request
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($body),
        ));

        curl_exec($curl);

        curl_close($curl);

        return config('faye');


    }


}
