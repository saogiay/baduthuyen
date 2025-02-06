<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doitac extends Model
{
    protected $table = "doitac";
    protected $fillable = [
    	'anhdaidien', 'lienket'
    ];
}
