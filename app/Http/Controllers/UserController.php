<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('users.index',compact('users'));
    }

    public function add(){
        return view('users.add');
    }

    public function submit(UserRequest $request){
        $user =  User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        $user -> save();
        return redirect()->route('users.index');
    }

    public function edit(){
        return view('offers.edit');
    }
}
