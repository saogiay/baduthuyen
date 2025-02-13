<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Gioithieu extends Model
{
    protected $table = "gioithieu";
    protected $fillable = [
        'noidunggioithieu',
        'title',
        'description',
        'headings',
        'gioithieungan',
        'anhdaidien'
    ];

    private static $caches = [];

    public static function getAndCache()
    {
        if (count(self::$caches) > 0) {
            return self::$caches;
        }

        $gioithieu = Cache::remember('gioithieu', 60 * 60 * 24 * 30, function () {
            return self::first()->toJson();
        });
        $data = json_decode($gioithieu, false);

        self::$caches = $data;

        return $data;
    }
}
