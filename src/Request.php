<?php
namespace kodeops\remd;

class Request
{
    public static function do($endpoint, $method, $authorization)
    {
        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request(
                $method,
                $url,
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $authorization,
                    ]
                ]
            );
        } catch (Exception $e) {
            return error()
                ->type('request_exception')
                ->message('Could not complete request: ' . $e->getMessage());
        }
    }
}