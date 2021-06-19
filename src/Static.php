<?php
namespace kodeops\remd;

class Static
{
    public static function serviceSetting($service, $setting_key)
    {
        return "REMD_PAW_{$service}_{$setting_key}";
    }
}