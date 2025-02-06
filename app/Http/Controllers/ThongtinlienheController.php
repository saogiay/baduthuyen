<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thongtinlienhe;
class ThongtinlienheController extends Controller
{
    public function index()
    {
    	$thongtinlienhe = Thongtinlienhe::paginate(15);
    	return view('admin.thongtinlienhe.index',[
            'thongtinlienhe' => $thongtinlienhe,
        ]);
    }

    public function update($id)
    {
    	$thongtinlienhe = Thongtinlienhe::find($id);
    	return view('admin.thongtinlienhe.update',[
            'thongtinlienhe' => $thongtinlienhe,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
    	$thongtinlienhe = Thongtinlienhe::find($id);

        $thongtinlienhe->fill([
            'hoten' => $request->hoten,
            'dienthoai' => $request->dienthoai,
            'email' => $request->email,
            'tongtien' => $request->tongtien,
            'soluong' => $request->soluong,
            'chieucao' => $request->chieucao,
            'chieungang' => $request->chieungang,
            'chieurong' => $request->chieurong,
            'quaixach' => $request->quaixach,
            'chatlieu' => $request->chatlieu,
            'dinhluong' => $request->dinhluong,
            'matin' => $request->matin,
            'cannilon' => $request->cannilon,
        ]);

        $thongtinlienhe->save();

    	return redirect('admin/thongtinlienhe/index')->with('thongbao', 'Sửa thành công !');
    }

    public function delete($id)
    {
    	$thongtinlienhe = Thongtinlienhe::find($id);
    	$thongtinlienhe->delete();
    	return redirect('admin/thongtinlienhe/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }

    // Tìm kiếm ajax
    public function ajaxFilter(Request $request){
        $key_word = $request->get('key_word', '');
        return Thongtinlienhe::where('name', 'like', '%'.$key_word.'%')
                                ->get();
    }
}
