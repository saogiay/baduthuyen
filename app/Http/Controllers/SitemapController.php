<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmucbaiviet;
use App\Baiviet;
use App\Danhmucsanpham;
use App\Sanpham;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App;
use Carbon\Carbon;

class SitemapController extends Controller
{

    public function index()
    {
          $danhmucbaiviet = Danhmucbaiviet::latest()->get();
          $danhmucsanpham = Danhmucsanpham::latest()->get();
          $baiviet = Baiviet::latest()->get();
          $sanpham = Sanpham::latest()->get();
          return response()->view('sitemap.index', [
              'danhmucbaiviet' => $danhmucbaiviet,
              'danhmucsanpham' => $danhmucsanpham,
              'baiviet' => $baiviet,
              'sanpham' => $sanpham,
          ])->header('Content-Type', 'text/xml');
    }

}