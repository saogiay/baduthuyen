<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoatdong extends Model
{
    protected $table = "hoatdong";
    protected $fillable = [
    	'anhdaidien', 'name'
    ];
}
