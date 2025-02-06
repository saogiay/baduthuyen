<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhmucbaiviet extends Model
{
    protected $table = "danhmucbaiviet";
    protected $fillable = [
    	'name', 'code', 'status', 'status2', 'title', 'description', 'headings'
    ];

    public function baiviet()
	{
	    return $this->hasMany('App\Baiviet', 'danhmucbaiviet_id', 'id');
	}
}
