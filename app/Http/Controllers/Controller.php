<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\Product;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
    	return view('admin.layout.index',[

        ]);
    }

    function __construct()
    {
    	$this->checkLogin();
    }

    function checkLogin()
    {
    	if(Auth::check())
    	{
    		view()->share('user_login', Auth::user());
    	}
    }


}
