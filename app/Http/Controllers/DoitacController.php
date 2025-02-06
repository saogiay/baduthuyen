<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doitac;

class DoitacController extends Controller
{
    public function index()
    {
    	$doitac = Doitac::paginate(15);
    	return view('admin.doitac.index',[
            'doitac' => $doitac,

        ]);
    }

    public function create()
    {
    	return view('admin.doitac.create');
    }

    public function createPost(Request $request)
    {

        $doitac = new Doitac;
        $doitac->fill([
            'lienket' => $request->lienket,
        ]);

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/doitac/create')->with('thongbao_create', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/doitac/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/doitac", $anhdaidien);
            $doitac->anhdaidien = $anhdaidien;
        }else{
            $doitac->anhdaidien = "";
        }

        $doitac->save();

    	return redirect('admin/doitac/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
        $doitacAll = Doitac::all();
    	$doitac = Doitac::find($id);
    	return view('admin.doitac.update',[
            'doitac' => $doitac,
            'doitacAll' => $doitacAll,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
    	$doitac = Doitac::find($id);

        $doitac->fill([
            'lienket' => $request->lienket,
        ]);

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/doitac/update/'.$id)->with('thongbao_update', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/doitac/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/doitac", $anhdaidien);
            if($doitac->anhdaidien != NULL){
                unlink("public/upload/doitac/".$doitac->anhdaidien);
            }
            $doitac->anhdaidien = $anhdaidien;
        }

        $doitac->save();

    	return redirect('admin/doitac/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $doitac = Doitac::find($id);
        return view('admin.doitac.view',[
            'doitac' => $doitac,
        ]);
    }

    public function delete($id)
    {
    	$doitac = Doitac::find($id);
    	$doitac->delete();
    	return redirect('admin/doitac/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }
}
