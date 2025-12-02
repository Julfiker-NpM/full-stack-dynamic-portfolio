<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];

    public static function get($key, $default = null)
    {
        try {
            $setting = self::where('key', $key)->first();
            return $setting ? $setting->value : $default;
        } catch (\Exception $e) {
            return $default;
        }
    }

    public static function set($key, $value)
    {
        try {
            return self::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        } catch (\Exception $e) {
            return null;
        }
    }
}

