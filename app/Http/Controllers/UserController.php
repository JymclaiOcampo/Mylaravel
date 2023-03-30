<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index()
    {
        return 'Hello from User Controller';
    }

    public function login()
    {
        if (View::exists('user.login')) {
            return view('user.login');
        } else {
            return abort(404);
        }
    }

    public function register()
    {
        return view('user.register');
    }

    public function show($id)
    {
        $data = array(
            "id" => $id,
            "name" => "JobSystem",
            "age" => 22,
            "email" => "jymclai@gmail.com"
        );
        return view('user', $data);
    }
}
