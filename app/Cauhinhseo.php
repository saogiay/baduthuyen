<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cauhinhseo extends Model
{
    protected $table = "cauhinhseo";
    protected $fillable = [
    	'title', 'description', 'headings','analytics', 'webmastertool', 'script'
    ];
}
