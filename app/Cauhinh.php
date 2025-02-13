<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Cauhinh extends Model
{
    protected $table = "cauhinh";
    protected $fillable = [
        'tendoanhnghiep',
        'mst',
        'bct',
        'diachi',
        'diachi2',
        'hotline1',
        'hotline2',
        'email',
        'logo',
        'fanpage',
        'map',
        'zalo',
        'mess',
        'ytb',
        'twiter',
        'google'
    ];

    private static $caches = [];

    public static function getAndCache()
    {
        if (count(self::$caches) > 0) {
            return self::$caches;
        }

        $cauhinh = Cache::remember('cauhinh', 60 * 60 * 24 * 30, function () {
            return self::first()->toJson();
        });
        $data = json_decode($cauhinh, false);

        self::$caches = $data;

        return $data;
    }
}
