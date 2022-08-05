<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $data = User::get();

        return view('user.index', compact('data'));
    }

    public function login()
    {
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect()->route('admin.user');
        } else {
            return view('login');
        }
    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function postLogin(Request $request)
    {
        $login = [
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,
        ];
        if (Auth::attempt($login)) {
            return redirect()->route('admin.user');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }

}
