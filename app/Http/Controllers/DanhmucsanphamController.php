<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmucsanpham;
use App\Danhmuc_sanpham;
use App\Rules\checkSlug;

class DanhmucsanphamController extends Controller
{
    public function index()
    {
        $danhmucsanpham = Danhmucsanpham::orderBy('id', 'desc')->paginate(15);
    	return view('admin.danhmucsanpham.index',[
            'danhmucsanpham' => $danhmucsanpham,
        ]);
    }

    public function create()
    {
        $danhmucsanpham = Danhmucsanpham::where('danhmuccha_id', 0)->get();
    	return view('admin.danhmucsanpham.create',[
            'danhmucsanpham' => $danhmucsanpham,
        ]);
    }

    public function createPost(Request $request)
    {
        $request['code'] = $request->code ? changTitle($request->code) :changTitle($request->name);
    	$message = [
                'name.required' => 'Chưa nhập tên danh mục !',
                'name.unique' => 'Tên danh mục đã tồn tại !',
            ];
        $validated =
            [
                'name' => 'required|unique:danhmucsanpham,name,'.$request->id,
                'code' => ['string', new checkSlug()],
                'anhdaidien' => 'mimes:jpg,png,jpeg',
            ];
        $this->validate($request, $validated, $message);

        $danhmucsanpham = new Danhmucsanpham;
        $danhmucsanpham->fill([
            'name' => $request->name,
            'code' => changTitle($request->name),
            'danhmuccha_id' => $request->danhmuccha_id,
            'status' => $request->status,
            'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
            'vitri' => $request->vitri,
        ]);

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/danhmucsanpham/create')->with('thongbao_create', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/danhmucsanpham/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/danhmucsanpham", $anhdaidien);
            $danhmucsanpham->anhdaidien = $anhdaidien;
        }else{
            $danhmucsanpham->anhdaidien = "";
        }

        $danhmucsanpham->save();

    	return redirect('admin/danhmucsanpham/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
    	$danhmucsanpham = Danhmucsanpham::find($id);

        $danhmucsanphamAll = Danhmucsanpham::where('danhmuccha_id', 0)->get();
    	return view('admin.danhmucsanpham.update',[
            'danhmucsanpham' => $danhmucsanpham,
            'danhmucsanphamAll' => $danhmucsanphamAll
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
    	$danhmucsanpham = Danhmucsanpham::find($id);
        $request['code'] = $request->code ? changTitle($request->code) :changTitle($request->name);
        if ($request->code != $danhmucsanpham->code) {
            $message = [
                'code' => ['string', new checkSlug()],
            ];
            $validated =
                [
                    'code' => ['string', new checkSlug()],
                ];
            $this->validate($request, $validated, $message);
        }

    	$message = [
                'name.required' => 'Chưa nhập tên danh mục !',
                'name.unique' => 'Tên danh mục đã tồn tại !',
            ];
        $validated =
            [
                'name' => 'required|unique:danhmucsanpham,name,'.$request->id,
            ];
        $this->validate($request, $validated, $message);

        $danhmucsanpham->fill([
            'name' => $request->name,
            'code' => $request->code,
            'danhmuccha_id' => $request->danhmuccha_id,
            'status' => $request->status,
            'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
            'vitri' => $request->vitri,
        ]);

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/danhmucsanpham/update/'.$id)->with('thongbao_update', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/danhmucsanpham/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/danhmucsanpham", $anhdaidien);
            if($danhmucsanpham->anhdaidien != NULL){
                unlink("public/upload/danhmucsanpham/".$danhmucsanpham->anhdaidien);
            }
            $danhmucsanpham->anhdaidien = $anhdaidien;
        }

        $danhmucsanpham->save();

    	return redirect('admin/danhmucsanpham/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $danhmucsanpham = Danhmucsanpham::find($id);
        return view('admin.danhmucsanpham.view',[
            'danhmucsanpham' => $danhmucsanpham,
        ]);
    }

    public function delete($id)
    {
    	$danhmucsanpham = Danhmucsanpham::find($id);
    	$danhmucsanpham->delete();
    	return redirect('admin/danhmucsanpham/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }

    // Tìm kiếm ajax
    public function ajaxFilter(Request $request){
        $key_word = $request->get('key_word', '');
        return Danhmucsanpham::where('name', 'like', '%'.$key_word.'%')
                                ->orWhere('code', 'like', '%'.$key_word.'%')
                                ->get();
    }
}
