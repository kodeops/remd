<?php
namespace kodeops\remd\Traits;

use kodeops\remd\Setting;

Trait ServiceSetting
{
    private static function serviceSetting($key)
    {
        return Setting::get(self::SERVICE, $key);
    }
}