<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cauhinh;

class CauhinhController extends Controller
{
    use SaveFileTrait;
    public function index()
    {
        $cauhinh = Cauhinh::paginate(15);
        return view('admin.cauhinh.index', [
            'cauhinh' => $cauhinh,
        ]);
    }

    public function create()
    {
        return view('admin.cauhinh.create');
    }

    public function createPost(Request $request)
    {

        $cauhinh = new Cauhinh;
        $cauhinh->fill([
            'tendoanhnghiep' => $request->tendoanhnghiep,
            'mst' => $request->mst,
            'bct' => $request->bct,
            'diachi' => $request->diachi,
            'hotline1' => $request->hotline1,
            'hotline2' => $request->hotline2,
            'email' => $request->email,
            'fanpage' => $request->fanpage,
            'map' => $request->map,
            'about' => $request->about,
            'zalo' => $request->zalo,
        ]);

        if ($request->hasFile('logo')) {
            $cauhinh->logo = $this->saveFile($request->file('logo'), 'cauhinh');
        }

        $cauhinh->save();

        return redirect('admin/cauhinh/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
        $cauhinhAll = Cauhinh::all();
        $cauhinh = Cauhinh::find($id);
        return view('admin.cauhinh.update', [
            'cauhinh' => $cauhinh,
            'cauhinhAll' => $cauhinhAll,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
        $cauhinh = Cauhinh::find($id);

        $cauhinh->fill([
            'tendoanhnghiep' => $request->tendoanhnghiep,
            'mst' => $request->mst,
            'bct' => $request->bct,
            'diachi' => $request->diachi,
            'diachi2' => $request->diachi2,
            'hotline1' => $request->hotline1,
            'hotline2' => $request->hotline2,
            'email' => $request->email,
            'fanpage' => $request->fanpage,
            'map' => $request->map,
            'zalo' => $request->zalo,
            'mess' => $request->mess,
            'ytb' => $request->ytb,
            'google' => $request->google,
            'twiter' => $request->twiter,
        ]);

        if ($request->hasFile('logo')) {
            $this->deleteFile($cauhinh->logo, 'cauhinh');
            $cauhinh->logo = $this->saveFile($request->file('logo'), 'cauhinh');
        }

        $cauhinh->save();

        // return redirect('admin/cauhinh/index')->with('thongbao', 'Sửa thành công !');
        return redirect('admin/cauhinh/update/1')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $cauhinh = Cauhinh::find($id);
        return view('admin.cauhinh.view', [
            'cauhinh' => $cauhinh,
        ]);
    }

    public function delete($id)
    {
        $cauhinh = Cauhinh::find($id);
        $cauhinh->delete();
        return redirect('admin/cauhinh/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }
}
