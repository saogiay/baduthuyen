<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thongtin;
use App\Danhmucthongtin;

class ThongtinController extends Controller
{
    public function index()
    {
    	$thongtin = Thongtin::orderBy('id', 'desc')->paginate(15);
    	return view('admin.thongtin.index',[
            'thongtin' => $thongtin,
        ]);
    }

    public function create()
    {
        $thongtin = Thongtin::all();
        $danhmucthongtin = Danhmucthongtin::all();
    	return view('admin.thongtin.create',[
            'thongtin' => $thongtin,
            'danhmucthongtin' => $danhmucthongtin
        ]);
    }

    public function createPost(Request $request)
    {
        $thongtin = new Thongtin;
        $thongtin->fill([
            'name' => $request->name,
            'mota' => $request->mota,
            'danhmucthongtin_id' => $request->danhmucthongtin_id
        ]);
        $thongtin->save();

    	return redirect('admin/thongtin/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
    	$thongtin = Thongtin::find($id);
        $danhmucthongtin = Danhmucthongtin::all();
    	return view('admin.thongtin.update',[
            'thongtin' => $thongtin,
            'danhmucthongtin' => $danhmucthongtin,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
    	$thongtin = Thongtin::find($id);

        $thongtin->fill([
            'name' => $request->name,
            'mota' => $request->mota,
            'danhmucthongtin_id' => $request->danhmucthongtin_id
        ]);

        $thongtin->save();

    	return redirect('admin/thongtin/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $thongtin = Thongtin::find($id);
        return view('admin.thongtin.view',[
            'thongtin' => $thongtin,
        ]);
    }

    public function delete($id)
    {
    	$thongtin = Thongtin::find($id);
    	$thongtin->delete();
    	return redirect('admin/thongtin/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }

    // Tìm kiếm ajax
    public function ajaxFilter(Request $request){
        $key_word = $request->get('key_word', '');
        return Thongtin::where('name', 'like', '%'.$key_word.'%')
                                ->orWhere('code', 'like', '%'.$key_word.'%')
                                // ->orWhere('motabaiviet', 'like', '%'.$key_word.'%')
                                ->with('danhmucthongtin')
                                ->get();
    }
}
