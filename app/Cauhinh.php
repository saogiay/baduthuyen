<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cauhinh extends Model
{
    protected $table = "cauhinh";
    protected $fillable = [
    	'tendoanhnghiep', 'mst', 'bct', 'diachi', 'diachi2', 'hotline1','hotline2', 'email', 'logo', 'fanpage', 'map', 'zalo', 'mess', 'ytb', 'twiter', 'google'
	];
}
