<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmucbaiviet;
use App\Rules\checkSlug;

class DanhmucbaivietController extends Controller
{
    public function index()
    {
    	$danhmucbaiviet = Danhmucbaiviet::paginate(15);
    	return view('admin.danhmucbaiviet.index',[
            'danhmucbaiviet' => $danhmucbaiviet,
        ]);
    }

    public function create()
    {
        $danhmucbaiviet = Danhmucbaiviet::all();
    	return view('admin.danhmucbaiviet.create',[
            'danhmucbaiviet' => $danhmucbaiviet,
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
                'name' => 'required|unique:danhmucbaiviet,name,'.$request->id,
                'code' => ['string', new checkSlug()],
            ];
        $this->validate($request, $validated, $message);

        $danhmucbaiviet = new Danhmucbaiviet;
        $danhmucbaiviet->fill([
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status,
            'status2' => $request->status2,
            'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
            'keyword' => $request->keyword,
        ]);

        $danhmucbaiviet->save();

    	return redirect('admin/danhmucbaiviet/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
    	$danhmucbaiviet = Danhmucbaiviet::find($id);
    	return view('admin.danhmucbaiviet.update',[
            'danhmucbaiviet' => $danhmucbaiviet,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
    	$danhmucbaiviet = Danhmucbaiviet::find($id);
        $request['code'] = $request->code ? changTitle($request->code) :changTitle($request->name);
        if ($request->code != $danhmucbaiviet->code) {
            $message = [
                'code.unique' => 'Code đã tồn tại trong hệ thống!',
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
                'name' => 'required|unique:danhmucbaiviet,name,'.$request->id,
            ];
        $this->validate($request, $validated, $message);

        $danhmucbaiviet->fill([
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status,
            'status2' => $request->status2,
            'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
            'keyword' => $request->keyword,
        ]);

        $danhmucbaiviet->save();

    	return redirect('admin/danhmucbaiviet/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $danhmucbaiviet = Danhmucbaiviet::find($id);
        return view('admin.danhmucbaiviet.view',[
            'danhmucbaiviet' => $danhmucbaiviet,
        ]);
    }

    public function delete($id)
    {
    	$danhmucbaiviet = Danhmucbaiviet::find($id);
    	$danhmucbaiviet->delete();
    	return redirect('admin/danhmucbaiviet/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }

    // Tìm kiếm ajax
    public function ajaxFilter(Request $request){
        $key_word = $request->get('key_word', '');
        return Danhmucbaiviet::where('name', 'like', '%'.$key_word.'%')
                                ->orWhere('code', 'like', '%'.$key_word.'%')
                                ->get();
    }

}
