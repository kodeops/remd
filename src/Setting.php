<?php
namespace kodeops\remd;

use kodeops\remd\Exceptions\RemdPawException;

class Setting
{
    const ENV_PREFIX = 'REMD';

    public static function get($service, $setting_key)
    {
        // Build environment key according to given service and key
        $env_key = self::ENV_PREFIX . "_" . strtoupper($service) . "_{$setting_key}";
        
        // Check that the environment key is set
        if (! env($env_key)) {
            throw new RemdPawException("remd is missing {$env_key} enviroment");
        }

        return env($env_key);
    }
}