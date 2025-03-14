<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baiviet;
use App\Danhmucbaiviet;
use App\Rules\checkSlug;

class BaivietController extends Controller
{
    use SaveFileTrait;
    public function index()
    {
        $baiviet = Baiviet::orderBy('id', 'desc')->paginate(15);
        return view('admin.baiviet.index', [
            'baiviet' => $baiviet,
        ]);
    }

    public function create()
    {
        $baiviet = Baiviet::all();
        $danhmucbaiviet = Danhmucbaiviet::all();
        return view('admin.baiviet.create', [
            'baiviet' => $baiviet,
            'danhmucbaiviet' => $danhmucbaiviet
        ]);
    }

    public function createPost(Request $request)
    {
        $request['code'] = $request->code ? changTitle($request->code) :changTitle($request->name);
    	$message = [
                'name.required' => 'Chưa nhập tên bài viết !',
                'name.unique' => 'Tên bài viết đã tồn tại !',
            ];
        $validated =
            [
                'name' => 'required|unique:baiviet,name,'.$request->id,
                'code' => ['string', new checkSlug()],
                'anhdaidien' => 'mimes:jpg,png,jpeg',
            ];
        $this->validate($request, $validated, $message);

        $baiviet = new Baiviet;
        $baiviet->fill([
            'name' => $request->name,
            'code' =>   $request->code,
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
            'alt_avatar' => $request->alt_avatar ? $request->alt_avatar : $request->name,
            'keyword' => $request->keyword,
        ]);

        if ($request->hasFile('anhdaidien')) {
            $baiviet->anhdaidien = $this->saveFile($request->file('anhdaidien'), 'baiviet');
        }

        $baiviet->save();

        return redirect('admin/baiviet/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
        $baiviet = Baiviet::find($id);
        $danhmucbaiviet = Danhmucbaiviet::all();
        return view('admin.baiviet.update', [
            'baiviet' => $baiviet,
            'danhmucbaiviet' => $danhmucbaiviet,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
    	$baiviet = Baiviet::find($id);

        $request['code'] = $request->code ? changTitle($request->code) :changTitle($request->name);
        if ($request->code != $baiviet->code) {
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
            'name.required' => 'Chưa nhập tên bài viết !',
            'name.unique' => 'Tên bài viết đã tồn tại !',
        ];
        $validated =
            [
                'name' => 'required|unique:baiviet,name,'.$request->id,
                'anhdaidien' => 'mimes:jpg,png,jpeg',
            ];
        $this->validate($request, $validated, $message);

        $baiviet->fill([
            'name' => $request->name,
            'code' =>  $request->code,
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
            'alt_avatar' => $request->alt_avatar ? $request->alt_avatar : $request->name,
            'keyword' => $request->keyword,
        ]);

        if ($request->hasFile('anhdaidien')) {
            $this->deleteFile('baiviet', $baiviet->anhdaidien);
            $baiviet->anhdaidien = $this->saveFile($request->file('anhdaidien'), 'baiviet');
        }

        $baiviet->save();

        return redirect('admin/baiviet/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $baiviet = Baiviet::find($id);
        return view('admin.baiviet.view', [
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
    public function ajaxFilter(Request $request)
    {
        $key_word = $request->get('key_word', '');
        return Baiviet::where('name', 'like', '%' . $key_word . '%')
            ->orWhere('code', 'like', '%' . $key_word . '%')
            // ->orWhere('motabaiviet', 'like', '%'.$key_word.'%')
            ->with('danhmucbaiviet')
            ->get();
    }
}
