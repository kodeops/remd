<?php
namespace kodeops\remd;

use Exception;
use GuzzleHttp;

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
        $check_env_key = 'REMD_AW_' . strtoupper($service) . '_KEY';
        if (!env($check_env_key)) {
            throw new Exception('remd is missing ' . $check_env_key . ' enviroment');
        }

        $request_params = [
            'headers' => [
                'Authorization' => 'Bearer ' . $authorization,
                'User-Agent' => 'kodeops/remd',
            ]
        ];

        switch ($method) {
            case 'GET':
                $endpoint .= '?' . http_build_query($params);
            break;

            case 'POST':
                $request_params['form_params'] = $params;
            break;
        }

        $client = new GuzzleHttp\Client();
        try {
            $response = $client->request(
                $method,
                $endpoint,
                $request_params
            );
        } catch (GuzzleHttp\Exception\ConnectException $e) {
            return error()
                ->type('connect_exception')
                ->message($e->getMessage());
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            $rro = rro(json_decode($e->getResponse()->getBody()->getContents()));

            if ($rro) {
                return $rro;
            }
            
            return error()
                ->type('bad_response_exception')
                ->message(self::removeResponseContents($e->getMessage()))
                ->code($e->getResponse()->getStatusCode())
                ->data(['contents' => $e->getResponse()->getBody()->getContents()]);
        } catch (GuzzleHttp\Exception\ServerException $e) {
            return error()
                ->type('server_exception')
                ->message($e->getMessage());
        } catch (GuzzleHttp\Exception\RequestException $e) {
            return error()
                ->type('request_exception')
                ->message($e->getMessage());
        } catch (Exception $e) {
            return error()
                ->type('unhandled_exception')
                ->message($e->getMessage());
        }

        $content = json_decode($response->getBody());
        
        $rro = rro($content);
        if ($rro) {
            return $rro;
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

    private static function removeResponseContents($message)
    {
        return explode(' response:', $message)[0];
    }
}