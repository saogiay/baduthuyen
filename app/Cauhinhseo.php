<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Cauhinhseo extends Model
{
    protected $table = "cauhinhseo";
    protected $fillable = [
        'title',
        'description',
        'headings',
        'analytics',
        'webmastertool',
        'script'
    ];

    private static $caches = [];

    protected static function booted()
    {
        static::updated(function (Cauhinhseo $entry) {
            Cache::forget('cauhinhseo');
            static::getAndCache();
        });
    }

    public static function getAndCache()
    {
        if (isset(self::$caches['data'])) {
            return self::$caches['data'];
        }

        $cauhinh = Cache::remember('cauhinhseo', 60 * 60 * 24 * 30, function () {
            return self::first()->toJson();
        });
        $data = json_decode($cauhinh, false);

        self::$caches['data'] = $data;

        return self::$caches['data'];
    }
}
