<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hoatdong;

class HoatdongController extends Controller
{
    public function index()
    {
    	$hoatdong = Hoatdong::paginate(15);
    	return view('admin.hoatdong.index',[
            'hoatdong' => $hoatdong,

        ]);
    }

    public function create()
    {
    	return view('admin.hoatdong.create');
    }

    public function createPost(Request $request)
    {

        $hoatdong = new Hoatdong;
        $hoatdong->fill([
            'name' => $request->name,
        ]);

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/hoatdong/create')->with('thongbao_create', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/hoatdong/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/hoatdong", $anhdaidien);
            $hoatdong->anhdaidien = $anhdaidien;
        }else{
            $hoatdong->anhdaidien = "";
        }

        $hoatdong->save();

    	return redirect('admin/hoatdong/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
        $hoatdongAll = Hoatdong::all();
    	$hoatdong = Hoatdong::find($id);
    	return view('admin.hoatdong.update',[
            'hoatdong' => $hoatdong,
            'hoatdongAll' => $hoatdongAll,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
    	$hoatdong = Hoatdong::find($id);

        $hoatdong->fill([
            'name' => $request->name,
        ]);

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/hoatdong/update/'.$id)->with('thongbao_update', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/hoatdong/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/hoatdong", $anhdaidien);
            if($hoatdong->anhdaidien != NULL){
                unlink("public/upload/hoatdong/".$hoatdong->anhdaidien);
            }
            $hoatdong->anhdaidien = $anhdaidien;
        }

        $hoatdong->save();

    	return redirect('admin/hoatdong/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $hoatdong = Hoatdong::find($id);
        return view('admin.hoatdong.view',[
            'hoatdong' => $hoatdong,
        ]);
    }

    public function delete($id)
    {
    	$hoatdong = Hoatdong::find($id);
    	$hoatdong->delete();
    	return redirect('admin/hoatdong/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }
}
