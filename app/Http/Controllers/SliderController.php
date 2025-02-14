<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    use SaveFileTrait;
    public function index()
    {
        $slider = Slider::paginate(15);
        return view('admin.slider.index', [
            'slider' => $slider,

        ]);
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function createPost(Request $request)
    {

        $slider = new Slider;
        $slider->fill([
            'linkbaiviet' => $request->linkbaiviet,
        ]);

        if ($request->hasFile('anhdaidien')) {
            $slider->anhdaidien = $this->saveFile($request->file('anhdaidien'), 'slider');
        }

        $slider->save();

        return redirect('admin/slider/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
        $sliderAll = Slider::all();
        $slider = Slider::find($id);
        return view('admin.slider.update', [
            'slider' => $slider,
            'sliderAll' => $sliderAll,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        // dd($request->all());
        $slider = Slider::find($id);

        $slider->fill([
            'linkbaiviet' => $request->linkbaiviet,
        ]);

        if ($request->hasFile('anhdaidien')) {
            $this->deleteFile('slider', $slider->anhdaidien);
            $slider->anhdaidien = $this->saveFile($request->file('anhdaidien'), 'slider');
        }

        $slider->save();

        return redirect('admin/slider/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.view', [
            'slider' => $slider,
        ]);
    }

    public function delete($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('admin/slider/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }
}
