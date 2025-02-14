<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
    protected $table = "baiviet";
    protected $fillable = [
    	'name', 'code', 'anhdaidien','motabaiviet', 'noidungbaiviet', 'status', 'status_foot', 'danhmucbaiviet_id', 'title', 'description', 'headings', 'status2', 'status3', 'alt_avatar', 'keyword'
    ];

    public function danhmucbaiviet()
	{
	    return $this->belongsTo('App\Danhmucbaiviet', 'danhmucbaiviet_id', 'id');
	}
}
