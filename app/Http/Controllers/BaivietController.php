<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baiviet;
use App\Danhmucbaiviet;

class BaivietController extends Controller
{
    public function index()
    {
    	$baiviet = Baiviet::orderBy('id', 'desc')->paginate(15);
    	return view('admin.baiviet.index',[
            'baiviet' => $baiviet,
        ]);
    }

    public function create()
    {
        $baiviet = Baiviet::all();
        $danhmucbaiviet = Danhmucbaiviet::all();
    	return view('admin.baiviet.create',[
            'baiviet' => $baiviet,
            'danhmucbaiviet' => $danhmucbaiviet
        ]);
    }

    public function createPost(Request $request)
    {
    	$message = [
                'name.required' => 'Chưa nhập tên bài viết !',
                'name.unique' => 'Tên bài viết đã tồn tại !',
            ];
        $validated =
            [
                'name' => 'required|unique:baiviet,name,'.$request->id,
            ];
        $this->validate($request, $validated, $message);

        $baiviet = new Baiviet;
        $baiviet->fill([
            'name' => $request->name,
            'code' => changTitle($request->name),
            'motabaiviet' => $request->motabaiviet,
            'noidungbaiviet' => $request->noidungbaiviet,
            'status' => $request->status,
          	'status2' => $request->status2,
            'status3' => $request->status3,
            'status_foot' => $request->status_foot,
            'danhmucbaiviet_id' => $request->danhmucbaiviet_id,
            'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
        ]);

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/baiviet/create')->with('thongbao_create', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/baiviet/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/baiviet", $anhdaidien);
            $baiviet->anhdaidien = $anhdaidien;
        }else{
            $baiviet->anhdaidien = "";
        }
        $baiviet->save();

    	return redirect('admin/baiviet/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
    	$baiviet = Baiviet::find($id);
        $danhmucbaiviet = Danhmucbaiviet::all();
    	return view('admin.baiviet.update',[
            'baiviet' => $baiviet,
            'danhmucbaiviet' => $danhmucbaiviet,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
    	$baiviet = Baiviet::find($id);

    	$message = [
                'name.required' => 'Chưa nhập tên bài viết !',
                'name.unique' => 'Tên bài viết đã tồn tại !',
            ];
        $validated =
            [
                'name' => 'required|unique:baiviet,name,'.$request->id,
            ];
        $this->validate($request, $validated, $message);

        $baiviet->fill([
            'name' => $request->name,
            'code' => changTitle($request->name),
            'motabaiviet' => $request->motabaiviet,
            'noidungbaiviet' => $request->noidungbaiviet,
            'status' => $request->status,
          	'status2' => $request->status2,
            'status3' => $request->status3,
            'status_foot' => $request->status_foot,
            'danhmucbaiviet_id' => $request->danhmucbaiviet_id,
            'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
        ]);

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/baiviet/update/'.$id)->with('thongbao_update', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/baiviet/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/baiviet", $anhdaidien);
            if($baiviet->anhdaidien != NULL){
                unlink("public/upload/baiviet/".$baiviet->anhdaidien);
            }
            $baiviet->anhdaidien = $anhdaidien;
        }

        $baiviet->save();

    	return redirect('admin/baiviet/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $baiviet = Baiviet::find($id);
        return view('admin.baiviet.view',[
            'baiviet' => $baiviet,
        ]);
    }

    public function delete($id)
    {
    	$baiviet = Baiviet::find($id);
    	$baiviet->delete();
    	return redirect('admin/baiviet/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }

    // Tìm kiếm ajax
    public function ajaxFilter(Request $request){
        $key_word = $request->get('key_word', '');
        return Baiviet::where('name', 'like', '%'.$key_word.'%')
                                ->orWhere('code', 'like', '%'.$key_word.'%')
                                // ->orWhere('motabaiviet', 'like', '%'.$key_word.'%')
                                ->with('danhmucbaiviet')
                                ->get();
    }
}
