<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sanpham;
use App\Danhmucsanpham;
use App\Hinhanhsanpham;
use App\Rules\checkSlug;
use Illuminate\Support\Facades\DB;
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

    public function createProduct(Request $request)
    {
        DB::beginTransaction();
        try {
            $request['code'] = $request->code ? changTitle($request->code) : changTitle($request->name);
            $message = [
                'name.required' => 'Chưa nhập tên sản phẩm !',
                'name.unique' => 'Tên sản phẩm đã tồn tại !',
                'masp.required' => 'Chưa nhập mã sản phẩm !',
                'masp.unique' => 'Mã sản phẩm đã tồn tại !',
                'anhdaidien.mimes' => 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !',
                'tailieu.mimes' => 'Bạn chỉ được chọn file có đuôi pdf, doc, docx !',
            ];
            $validated =
                [
                    'name' => 'required|unique:sanpham,name,' . $request->id,
                    'masp' => 'required|unique:sanpham,masp,' . $request->id,
                    'anhdaidien' => 'mimes:jpg,png,jpeg',
                    'tailieu' => 'nullable|mimes:pdf,doc,docx',
                    'code' => ['string', new checkSlug()],
                ];
            $this->validate($request, $validated, $message);

            $sanpham = new Sanpham;

            $sanpham->fill([
                'name' => $request->name,
                'code' => $request->code,
                'status' => $request->status,
                'giasanpham' => $request->giasanpham,
                'masp' => $request->masp,
                'motasanpham' => $request->motasanpham,
                'noidungsanpham' => $request->noidungsanpham,
                'danhmucsanpham_id' => $request->danhmucsanpham_id,
                'title' => $request->title,
                'description' => $request->description,
                'headings' => $request->headings,
                'keyword' => $request->keyword,
                'alt_avatar' => $request->alt_avatar ? $request->alt_avatar : $request->name,
            ]);



            if ($request->hasFile('anhdaidien')) {
                $sanpham->anhdaidien = $this->saveFile($request->file('anhdaidien'), 'sanpham');
            }

            if ($request->hasFile('tailieu')) {
                $sanpham->tailieu = $this->saveDocument($request->file('tailieu'), 'sanpham');
            }

            $sanpham->save();

            $sanpham_id = $sanpham->id;

            if (Input::hasFile('image_detail')) {
                foreach (Input::file('image_detail') as $i => $file) {
                    $sanpham_img = new Hinhanhsanpham();
                    if (isset($file)) {
                        $sanpham_img->sanpham_id = $sanpham_id;
                        $sanpham_img->hinhanhsanpham = $this->saveFile($file, 'sanpham/hinhanh/' . $sanpham_id);
                        $sanpham_img->alt = $request->image_alt[$i] ?? null;
                        $sanpham_img->save();
                    }
                }
            }
            DB::commit();

            return redirect('admin/sanpham/index')->with('thongbao', 'Thêm mới thành công !');
        } catch (\Exception $e) {
            Db::rollBack();
            logger($e->getMessage());
            return redirect('admin/sanpham/index')->with('thongbao', 'Thêm mới thất bại !');
        }
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

    public function updateProduct(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $sanpham = Sanpham::find($id);
            $request['code'] = $request->code ? changTitle($request->code) : changTitle($request->name);
            if ($request->code != $sanpham->code) {
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
                'name.required' => 'Chưa nhập tên sản phẩm !',
                'name.unique' => 'Tên sản phẩm đã tồn tại !',
            ];
            $validated =
                [
                    'name' => 'required|unique:sanpham,name,' . $request->id,
                    'anhdaidien' => 'mimes:jpg,png,jpeg',
                ];
            $this->validate($request, $validated, $message);

            $sanpham->fill([
                'name' => $request->name,
                'code' => $request->code,
                'status' => $request->status,
                'masp' => $request->masp,
                'giasanpham' => $request->giasanpham,
                'motasanpham' => $request->motasanpham,
                'noidungsanpham' => $request->noidungsanpham,
                'danhmucsanpham_id' => $request->danhmucsanpham_id,
                'title' => $request->title,
                'description' => $request->description,
                'headings' => $request->headings,
                'alt_avatar' => $request->alt_avatar ? $request->alt_avatar : $request->name,
            ]);


            if ($request->hasFile('anhdaidien')) {
                $this->deleteFile('sanpham', $sanpham->anhdaidien);
                $sanpham->anhdaidien = $this->saveFile($request->file('anhdaidien'), 'sanpham');
            }

            if ($request->hasFile('tailieu')) {
                $this->deleteFile('sanpham', $sanpham->tailieu);
                $sanpham->tailieu = $this->saveDocument($request->file('tailieu'), 'sanpham');
            }

            $sanpham->save();

            $sanpham_id = $sanpham->id;

            if (Input::hasFile('image_detail')) {
                foreach (Input::file('image_detail') as $i => $file) {
                    if (isset($file)) {
                        $this->deleteFile('sanpham/hinhanh/' . $sanpham_id, $file->getClientOriginalName());
                        $sanpham_img = new Hinhanhsanpham();
                        $sanpham_img->sanpham_id = $sanpham_id;
                        $sanpham_img->hinhanhsanpham = $this->saveFile($file, 'sanpham/hinhanh/' . $sanpham_id);
                        $sanpham_img->alt = $request->image_alt[$i] ?? null;
                        $sanpham_img->save();
                    }
                }
            }
            DB::commit();
            return redirect('admin/sanpham/index')->with('thongbao', 'Sửa thành công !');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('admin/sanpham/index')->with('thongbao', 'Sửa thất bại !');
        }
    }

    public function removeHinhanhsanpham($id)
    {
        $hinhanhsanpham = Hinhanhsanpham::find($id);
        $hinhanhsanpham->delete();
        return redirect()->back();
    }

    public function updateAltHinhanhsanpham(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $hinhanhsanpham = Hinhanhsanpham::find($id);
            $hinhanhsanpham->alt = $request->alt;
            $hinhanhsanpham->save();
            DB::commit();
            return response()->json(['message' => 'Cập nhật Alternative Text cho ảnh thành công !'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            logger($e->getMessage());
            return response()->json(['message' => 'Cập nhật Alternative Text cho ảnh thất bại !'], 500);
        }
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
