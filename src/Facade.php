<?php
namespace kodeops\remd;

class Facade
{
    public static function api($service, $method, $params)
    {
        $namespace = '\kodeops\remd\Services\\' . $service;
        return $namespace::{$method}($params);
    }
}