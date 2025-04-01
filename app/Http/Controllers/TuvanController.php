<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tuvan\TuvanStoreRequest;
use Illuminate\Http\Request;
use App\Tuvan;

class TuvanController extends Controller
{
    public function index()
    {
        $tuvan = Tuvan::paginate(15);
        return view('admin.tuvan.index', [
            'tuvan' => $tuvan,
        ]);
    }

    public function store(TuvanStoreRequest $request)
    {
        $data = $request->all();
        $tuvan = new Tuvan();
        $tuvan->fill($data);
        $tuvan->name = $data['firstName'] . ' ' . $data['lastName'];
        $tuvan->save();
        return redirect()->back()->with('thongbao', 'Bạn đã gửi thành công! Chúng tôi sẽ liên hệ bạn sớm nhất có thể.');
    }

    public function update($id)
    {
        $tuvan = Tuvan::find($id);
        return view('admin.tuvan.update', [
            'tuvan' => $tuvan,
        ]);
    }

    public function delete($id)
    {
        $tuvan = Tuvan::find($id);
        $tuvan->delete();
        return redirect('admin/tuvan/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }

    // Tìm kiếm ajax
    public function ajaxFilter(Request $request)
    {
        $key_word = $request->get('key_word', '');
        return Tuvan::where('name', 'like', '%' . $key_word . '%')
            ->orWhere('email', 'like', '%' . $key_word . '%')
            ->orWhere('phone', 'like', '%' . $key_word . '%')
            ->get();
    }
}
