<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gioithieu extends Model
{
    protected $table = "gioithieu";
    protected $fillable = [
    	'noidunggioithieu', 'title', 'description', 'headings', 'gioithieungan', 'anhdaidien'
    ];
}
