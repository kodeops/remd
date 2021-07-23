<?php
namespace kodeops\remd\Traits;

use kodeops\remd\Setting;

class ServiceSetting
{
    private static function serviceSetting($key)
    {
        return Setting::get(self::SERVICE, $key);
    }
}