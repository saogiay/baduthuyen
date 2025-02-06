<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function index()
    {
    	$slider = Slider::paginate(15);
    	return view('admin.slider.index',[
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

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/slider/create')->with('thongbao_create', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/slider/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/slider", $anhdaidien);
            $slider->anhdaidien = $anhdaidien;
        }else{
            $slider->anhdaidien = "";
        }

        $slider->save();

    	return redirect('admin/slider/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
        $sliderAll = Slider::all();
    	$slider = Slider::find($id);
    	return view('admin.slider.update',[
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

        if($request->hasFile('anhdaidien'))
        {
            $file = $request->file('anhdaidien');
            $duoi_anhdaidien = $file->getClientOriginalExtension();
            if($duoi_anhdaidien != 'jpg' && $duoi_anhdaidien != 'png' && $duoi_anhdaidien != 'jpeg')
            {
                return redirect('admin/slider/update/'.$id)->with('thongbao_update', 'Bạn chỉ được chọn file ảnh có đuôi jpg, png, jpeg !');
            }
            $name = $file->getClientOriginalName();
            $anhdaidien = str_random(4)."_".$name;
            while(file_exists("public/upload/slider/".$anhdaidien))
            {
                $anhdaidien = str_random(4)."_".$name;
            }
            $file->move("public/upload/slider", $anhdaidien);
            if($slider->anhdaidien != NULL){
                unlink("public/upload/slider/".$slider->anhdaidien);
            }
            $slider->anhdaidien = $anhdaidien;
        }

        $slider->save();

    	return redirect('admin/slider/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.view',[
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
