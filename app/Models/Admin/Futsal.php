<?php

namespace App\Models\Admin;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Futsal extends Model
{
    use LogsActivity;

    protected $guarded = [];

    // Forget cache on updating or saving and deleting
    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            self::cacheKey();
        });

        static::deleting(function () {
            self::cacheKey();
        });
    }

    // Cache Keys
    private static function cacheKey()
    {
        Cache::has('futsals') ? Cache::forget('futsals') : '';
    }

    // Logs
    protected static $logName = 'futsal';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
