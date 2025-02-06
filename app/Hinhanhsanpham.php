<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinhanhsanpham extends Model
{
    protected $table = "hinhanhsanpham";
    protected $fillable = [
    	'hinhanhsanpham', 'sanpham_id'
    ];

    public function sanpham()
	{
	    return $this->belongsTo('App\Sanpham', 'sanpham_id', 'id');
	}
}
