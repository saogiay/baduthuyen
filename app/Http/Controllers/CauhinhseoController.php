<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cauhinhseo;

class CauhinhseoController extends Controller
{
    public function index()
    {
    	$cauhinhseo = Cauhinhseo::paginate(15);
    	return view('admin.cauhinhseo.index',[
            'cauhinhseo' => $cauhinhseo,
        ]);
    }

    public function create()
    {
    	return view('admin.cauhinhseo.create');
    }

    public function createPost(Request $request)
    {

        $cauhinhseo = new Cauhinhseo;
        $cauhinhseo->fill([
            'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
            'analytics' => $request->analytics,
            'webmastertool' => $request->webmastertool,
            'script' => $request->script,
        ]);

        $cauhinhseo->save();

    	return redirect('admin/cauhinhseo/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
        $cauhinhseoAll = Cauhinhseo::all();
    	$cauhinhseo = Cauhinhseo::find($id);
    	return view('admin.cauhinhseo.update',[
            'cauhinhseo' => $cauhinhseo,
            'cauhinhseoAll' => $cauhinhseoAll,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
    	$cauhinhseo = Cauhinhseo::find($id);

        $cauhinhseo->fill([
         	'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
            'analytics' => $request->analytics,
            'webmastertool' => $request->webmastertool,
            'script' => $request->script,
        ]);

        $cauhinhseo->save();

    	// return redirect('admin/cauhinhseo/index')->with('thongbao', 'Sửa thành công !');
        return redirect('admin/cauhinhseo/update/1')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $cauhinhseo = Cauhinhseo::find($id);
        return view('admin.cauhinhseo.view',[
            'cauhinhseo' => $cauhinhseo,
        ]);
    }

    public function delete($id)
    {
    	$cauhinhseo = Cauhinhseo::find($id);
    	$cauhinhseo->delete();
    	return redirect('admin/cauhinhseo/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }
}
