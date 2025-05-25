<?php

namespace App\Http\Traits;

use App\Models\Setting;

trait SettingsTrait
{
    public function getSettings()
    {
        return Setting::query();
    }
    public function getSetting($setting_id)
    {
        return Setting::find($setting_id);
    }
    public function getSettingByKey($key)
    {
        return Setting::where('key', $key)->first()->value;
    }

}
