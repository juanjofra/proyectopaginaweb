<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizacion');
        $this->middleware('auth');
    }

    public function index(){
        $users = User::where('email', '!=', 'juanjo.fra@gmail.com')->get();
        return view('auth.index', compact('users'));
    }

    public function denegar(User $user)
    {
        //dd( $user );
        $user->autorizacion = false;
        
        $user->save();
        return redirect()->route('user.index');
    }


    public function autorizar(User $user)
    {
        //dd( $user );
        $user->autorizacion = true;
        
        $user->save();
        return redirect()->route('user.index');
    }
}
