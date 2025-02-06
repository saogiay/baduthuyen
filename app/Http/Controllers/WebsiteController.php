<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmucbaiviet;
use App\Baiviet;
use App\Danhmucsanpham;
use App\Sanpham;
use App\Gioithieu;
use App\Cauhinh;
use App\Hinhanhsanpham;
use App\Thongtinlienhe;

use Carbon\Carbon;
use Mail;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App;
class WebsiteController extends Controller
{

    public function index()
    {
        $cauhinhseo = DB::table('cauhinhseo')->first();
        $gioithieu = DB::table('gioithieu')->first();
        $hinhanhdaidien = DB::table('slider')->orderBy('id', 'desc')->limit(1)->get();
        $danhmucsanpham = DB::table('danhmucsanpham')->where('danhmuccha_id', 0)->orWhere('danhmuccha_id', NULL)->limit(1)->get();
        $doitac = DB::table('doitac')->get();
        $hoatdong = DB::table('hoatdong')->get();
      	$baiviet = DB::table('baiviet')->where('status2', 1)->limit(8)->get();
    	return view('website.index', [
            'cauhinhseo' => $cauhinhseo,
            'gioithieu' => $gioithieu,
            'hinhanhdaidien' => $hinhanhdaidien,
            'danhmucsanpham' => $danhmucsanpham,
            'doitac' => $doitac,
            'hoatdong' => $hoatdong,
          	'baiviet' => $baiviet
    	]);
    }

    public function error()
    {
        return view('website.error');
    }

    public function xacnhan()
    {
        return view('website.xacnhan');
    }

    public function show($code, Request $request)
    {
        $danhmucbaiviet = Danhmucbaiviet::where('code',$code)->first();
        $baivietChitiet = Baiviet::where('code',$code)->first();
        $danhmucsanpham = Danhmucsanpham::where('code',$code)->first();
        $sanpham = Sanpham::where('code', $code)->first();
        $hinhanhdaidien = DB::table('slider')->orderBy('id', 'desc')->limit(1)->get();
        if($danhmucbaiviet){
            $baiviet = Baiviet::where('danhmucbaiviet_id', $danhmucbaiviet->id)->orderBy('id', 'desc')->paginate(10);
            return view('website.danhmucbaiviet', [
                'danhmucbaiviet' => $danhmucbaiviet,
                'baiviet' => $baiviet,
                'hinhanhdaidien' => $hinhanhdaidien,
            ]);
        }
        // End danh mục bài tiết
        elseif($baivietChitiet){
            $baivietChitiet->count_page += 1;
            $baivietChitiet->save();
            $danhmucbaivietChitiet = DB::table('danhmucbaiviet')->where('id', $baivietChitiet->danhmucbaiviet_id)->first();
            $baivietlienquan = Baiviet::where('danhmucbaiviet_id', $baivietChitiet->danhmucbaiviet_id)->orderBy('id', 'desc')->limit(3)->get();
            return view('website.baiviet', [
                'baivietChitiet' => $baivietChitiet,
                'danhmucbaivietChitiet' => $danhmucbaivietChitiet,
                'baivietlienquan' => $baivietlienquan,
            ]);
        }
        // End chi tiết bài viết
        elseif($danhmucsanpham){
            if($danhmucsanpham->danhmuccha_id == 0){
                $danhmucsanphamCon = DB::table('danhmucsanpham')->where('danhmuccha_id', $danhmucsanpham->id)->get();
                return view('website.danhmucsanphamCon', [
                    'danhmucsanpham' => $danhmucsanpham,
                    'danhmucsanphamCon' => $danhmucsanphamCon,
                    'hinhanhdaidien' => $hinhanhdaidien,
                ]);
            }else{
                $dieukien[] = $danhmucsanpham->id;
                $danhmucsanpham1 = Danhmucsanpham::where('danhmuccha_id',$danhmucsanpham->id)->get();
                if(count($danhmucsanpham1) > 0)
                foreach ($danhmucsanpham1 as $item1) {
                    $dieukien[] = $item1->id;
                    $danhmucsanpham2 = Danhmucsanpham::where('danhmuccha_id',$item1->id)->get();
                    if(count($danhmucsanpham2) > 0)
                    foreach ($danhmucsanpham2 as $item2) {
                        $dieukien[] = $item2->id;
                        $danhmucsanpham3 = Danhmucsanpham::where('danhmuccha_id',$item2->id)->get();
                        if(count($danhmucsanpham3) > 0)
                        foreach ($danhmucsanpham3 as $item3) {
                            $dieukien[] = $item3->id;
                        }
                    }
                }
                $sanpham = Sanpham::whereIn('danhmucsanpham_id',$dieukien)->orderBy('id', 'desc')->paginate(20);  
            }

            return view('website.danhmucsanpham', [
                'danhmucsanpham' => $danhmucsanpham,
                'sanpham' => $sanpham,
                'hinhanhdaidien' => $hinhanhdaidien,
            ]);
        }
        // End danh mục sản phẩm
        elseif($sanpham){
            $danhmucsanphamChitiet = DB::table('danhmucsanpham')->where('id', $sanpham->danhmucsanpham_id)->first();
            $hinhanhsanpham = Hinhanhsanpham::where('sanpham_id', $sanpham->id)->get();
            $sanphamlienquan = Sanpham::where('danhmucsanpham_id', $sanpham->danhmucsanpham_id)->orderBy('id', 'desc')->limit(5)->get();
            $cauhinh = DB::table('cauhinh')->first();
            return view('website.sanpham', [
                'sanpham' => $sanpham,
                'danhmucsanphamChitiet' => $danhmucsanphamChitiet,
                'hinhanhsanpham' => $hinhanhsanpham,
                'sanphamlienquan' => $sanphamlienquan,
                'cauhinh' => $cauhinh,
            ]);
        }
        // End sản phẩm
        elseif($code == 'gioi-thieu'){
            $gioithieu = DB::table('gioithieu')->first();
            return view('website.gioithieu', [
                'gioithieu' => $gioithieu,
                'hinhanhdaidien' => $hinhanhdaidien,
            ]);
        }
        // End giới thiệu
        elseif($code == 'lien-he'){
            return view('website.lienhe', [
                'hinhanhdaidien' => $hinhanhdaidien,
            ]);
        }
        // End liên hệ
        elseif($code == 'sitemap.xml'){
            $danhmucbaivietList = Danhmucbaiviet::latest()->get();
            $danhmucsanphamList = Danhmucsanpham::latest()->get();
            $baivietList = Baiviet::latest()->get();
            $sanphamList = Sanpham::latest()->get();
            return response()->view('sitemap.index', [
                'danhmucbaivietList' => $danhmucbaivietList,
                'danhmucsanphamList' => $danhmucsanphamList,
                'baivietList' => $baivietList,
                'sanphamList' => $sanphamList,
            ])->header('Content-Type', 'text/xml');
        }
        // End sitemap
        else{
            return redirect()->route('error');
        }
    }


    public function post($code, Request $request)
    {
        if($code == 'tim-kiem'){
            $tukhoa = $request->tukhoa;
            $sanpham = DB::table('sanpham')
                                    ->where('name', 'like', '%'.$request->tukhoa.'%')
                                    ->orWhere('code', 'like', '%'.$request->tukhoa.'%')
                                    ->orWhere('motasanpham', 'like', '%'.$request->tukhoa.'%')
                                    ->orWhere('giasanpham', 'like', '%'.$request->tukhoa.'%')
                                    ->paginate(10);
            $hinhanhdaidien = DB::table('slider')->orderBy('id', 'desc')->limit(1)->get();
            return view('website.timkiem', [
                'tukhoa' => $tukhoa,
                'sanpham' => $sanpham,
                'hinhanhdaidien' => $hinhanhdaidien,
            ]);
        }
        // End tìm kiếm
        else{
            return redirect()->route('error');
        }

    }

}