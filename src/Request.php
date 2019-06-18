<?php
namespace kodeops\remd;

use Exception;

class Request
{
    const DEFAULT_RESPONSE_TYPE = 'remd_request_ok';
    const DEFAULT_RESPONSE_MESSAGE = 'REMD (__SERVICE__) request success.';

    public static function do(
        $service,
        $endpoint, 
        $method, 
        $authorization, 
        array $params = []  
    )
    {
        switch ($method) {
            case 'GET':
                $endpoint .= '?' . http_build_query($params);
            break;
        }

        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request(
                $method,
                $endpoint,
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $authorization,
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                    ]
                ]
            );
        } catch (Exception $e) {
            return error()
                ->type('request_exception')
                ->message('Could not complete request: ' . $e->getMessage());
        }

        $rro = false;
        $content = json_decode($response->getBody());
        if (is_rro($content)) {
            $rro = rro($content);
        }

        return success()
            ->type(self::DEFAULT_RESPONSE_TYPE)
            ->message($rro ? $rro->getResponseMessage() : self::defaultResponseMessage($service))
            ->data([
                'status_code' => $response->getStatusCode(),
                'reason_phrase' => $response->getReasonPhrase(),
                'response_data' => $rro ? $rro->getData() : json_decode($response->getBody(), true),
            ]);
    }

    public static function defaultResponseMessage($service = 'unknown service')
    {
        return str_replace("__SERVICE__", $service, self::DEFAULT_RESPONSE_MESSAGE);
    }
}