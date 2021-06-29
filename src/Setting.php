<?php
namespace kodeops\remd;

class Setting
{
    const ENV_PREFIX = 'REMD';

    public static function get($service, $setting_key)
    {
        return self::ENV_PREFIX . "_" . strtoupper($service) . "_{$setting_key}";
    }
}