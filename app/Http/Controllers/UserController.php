<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
class UserController extends Controller
{
    public function index()
    {
    	$user = User::paginate(15);
    	return view('admin.user.index',[
            'user' => $user,
        ]);
    }

    public function create()
    {
    	return view('admin.user.create');
    }

    public function createPost(Request $request)
    {
        $validated =
            [
                'email' => 'required|email|unique:users,email,'.$request->id,
                'password' => 'required|min:3',
            ];
        $message = [
                'email.required'   => 'Bạn chưa điền email',
                'email.email'      => 'Email không đúng định dạng',
                'email.unique'     => 'Email đã tồn tại',
                'password.required' => 'Bạn chưa điền mật khẩu',
                'password.min'     => 'Mật khẩu phải có ít nhất 3 kí tự',
            ];
        $this->validate($request, $validated, $message);

        $user = new User;
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ]);
        $user->save();

    	return redirect('admin/user/index')->with('thongbao', 'Thêm mới thành công !');
    }

    public function update($id)
    {
        $userAll = User::all();
    	$user = User::find($id);
    	return view('admin.user.update',[
            'user' => $user, 
            'userAll' => $userAll,
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        $validated =
        [
                // 'email' => 'required|email|unique:users,email,'.$request->id, id
                'email' => "unique:users,email,$request->id,id",
                'password' => 'min:3',
            ];
        $message = [
                'email.required'   => 'Bạn chưa điền email',
                'email.email'      => 'Email không đúng định dạng',
                'email.unique'     => 'Email đã tồn tại',
                'password.required' => 'Bạn chưa điền mật khẩu',
                'password.min'     => 'Mật khẩu phải có ít nhất 3 kí tự',
            ];
        $this->validate($request, $validated, $message);
        $user = User::find($id);
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
        ]);
        if($request->changePassword == "on"){
            $validated =
            [
                    'password' => 'min:3',
                ];
            $message = [
                    'password.required' => 'Bạn chưa điền mật khẩu',
                    'password.min'     => 'Mật khẩu phải có ít nhất 3 kí tự',
                ];
            $this->validate($request, $validated, $message);
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect('admin/user/index')->with('thongbao', 'Sửa thành công !');
    }

    public function view($id)
    {
        $user = User::find($id);
        return view('admin.user.view',[
            'user' => $user,
        ]);
    }

    public function delete($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect('admin/user/index')->with('thongbao', 'Bạn đã xóa thành công !');
    }

    public function login()
    {
        return view('admin.login.index');
    }

    public function loginPost(Request $request)
    {
        $validated =
            [
                'email' => 'required',
                'password' => 'required|min:3',
            ];
        $message = [
                'email.required'   => 'Bạn chưa điền email',
                'password.required' => 'Bạn chưa điền mật khẩu',
                'password.min'     => 'Mật khẩu phải có ít nhất 3 kí tự',
            ];

        $this->validate($request, $validated, $message);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('admin/layout/index');
        }
        else
        {
            return redirect('myLogin')->with('thongbao', 'Đăng nhập không thành công !');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('myLogin');
    }
}
