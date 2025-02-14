<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sanpham;
use App\Danhmucsanpham;
use App\Hinhanhsanpham;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class SanphamController extends Controller
{
    use SaveFileTrait;
    public function index()
    {
        $sanpham = Sanpham::orderBy('id', 'desc')->paginate(15);
        return view('admin.sanpham.index', [
            'sanpham' => $sanpham,
        ]);
    }

    public function create()
    {
        $sanpham = Sanpham::all();
        $danhmucsanpham = Danhmucsanpham::where('danhmuccha_id', 0)->get();
        return view('admin.sanpham.create', [
            'sanpham' => $sanpham,
            'danhmucsanpham' => $danhmucsanpham
        ]);
    }

    public function createPost(Request $request)
    {
        $message = [
            'name.required' => 'Chưa nhập tên sản phẩm !',
            'name.unique' => 'Tên sản phẩm đã tồn tại !',
        ];
        $validated =
            [
                'name' => 'required|unique:sanpham,name,' . $request->id,
            ];
        $this->validate($request, $validated, $message);

        $sanpham = new Sanpham;

        $sanpham->fill([
            'name' => $request->name,
            'code' => changTitle($request->name),
            'status' => $request->status,
            'giasanpham' => $request->giasanpham,
            'masp' => $request->masp,
            'motasanpham' => $request->motasanpham,
            'noidungsanpham' => $request->noidungsanpham,
            'danhmucsanpham_id' => $request->danhmucsanpham_id,
            'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
        ]);



        if ($request->hasFile('anhdaidien')) {
            $sanpham->anhdaidien = $this->saveFile($request->file('anhdaidien'), 'sanpham');
        }
        $sanpham->save();

        $sanpham_id = $sanpham->id;

        if (Input::hasFile('image_detail')) {
            foreach (Input::file('image_detail') as $file) {
                $sanpham_img = new Hinhanhsanpham();
                if (isset($file)) {
                    $sanpham_img->sanpham_id = $sanpham_id;
                    $sanpham_img->hinhanhsanpham = $this->saveFile($file, 'sanpham/hinhanh/' . $sanpham_id);
                    $sanpham_img->save();
                }
            }
        }

        return redirect('admin/sanpham/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
        $sanpham = Sanpham::find($id);
        $danhmucsanpham = Danhmucsanpham::where('danhmuccha_id', 0)->get();
        $hinhanhsanpham = Hinhanhsanpham::where('sanpham_id', $id)->get();
        return view('admin.sanpham.update', [
            'sanpham' => $sanpham,
            'danhmucsanpham' => $danhmucsanpham,
            'hinhanhsanpham' => $hinhanhsanpham,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        $sanpham = Sanpham::find($id);

        $message = [
            'name.required' => 'Chưa nhập tên sản phẩm !',
            'name.unique' => 'Tên sản phẩm đã tồn tại !',
        ];
        $validated =
            [
                'name' => 'required|unique:sanpham,name,' . $request->id,
            ];
        $this->validate($request, $validated, $message);

        $sanpham->fill([
            'name' => $request->name,
            'code' => changTitle($request->name),
            'status' => $request->status,
            'masp' => $request->masp,
            'giasanpham' => $request->giasanpham,
            'motasanpham' => $request->motasanpham,
            'noidungsanpham' => $request->noidungsanpham,
            'danhmucsanpham_id' => $request->danhmucsanpham_id,
            'title' => $request->title,
            'description' => $request->description,
            'headings' => $request->headings,
        ]);


        if ($request->hasFile('anhdaidien')) {
            $this->deleteFile('sanpham', $sanpham->anhdaidien);
            $sanpham->anhdaidien = $this->saveFile($request->file('anhdaidien'), 'sanpham');
        }

        $sanpham->save();

        $sanpham_id = $sanpham->id;

        if (Input::hasFile('image_detail')) {
            foreach (Input::file('image_detail') as $file) {
                if (isset($file)) {
                    $this->deleteFile('sanpham/hinhanh/' . $sanpham_id, $file->getClientOriginalName());
                    $sanpham_img = new Hinhanhsanpham();
                    $sanpham_img->sanpham_id = $sanpham_id;
                    $sanpham_img->hinhanhsanpham = $this->saveFile($file, 'sanpham/hinhanh/' . $sanpham_id);
                    $sanpham_img->save();
                }
            }
        }

        return redirect('admin/sanpham/index')->with('thongbao', 'Sửa thành công !');
    }

    public function removeHinhanhsanpham($id)
    {
        $hinhanhsanpham = Hinhanhsanpham::find($id);
        $hinhanhsanpham->delete();
        return redirect()->back();
    }

    public function view($id)
    {
        $sanpham = Sanpham::find($id);
        return view('admin.sanpham.view', [
            'sanpham' => $sanpham,
        ]);
    }

    public function delete($id)
    {
        $sanpham = Sanpham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }

    // Tìm kiếm ajax
    public function ajaxFilter(Request $request)
    {
        $key_word = $request->get('key_word', '');
        return Sanpham::where('name', 'like', '%' . $key_word . '%')
            ->orWhere('code', 'like', '%' . $key_word . '%')
            // ->orWhere('motabaiviet', 'like', '%'.$key_word.'%')
            ->with('danhmucsanpham')
            ->get();
    }
}
