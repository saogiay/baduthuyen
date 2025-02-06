<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thongtinlienhe extends Model
{
    protected $table = "thongtinlienhe";
    protected $fillable = [
    	'hoten', 'dienthoai', 'email', 'tongtien', 'soluong', 'chieucao', 'chieungang', 'chieurong', 'quaixach', 'chatlieu', 'dinhluong', 'matin', 'cannilon'
    ];
}
