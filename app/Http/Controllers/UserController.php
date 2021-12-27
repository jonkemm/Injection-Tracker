<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function profile()
    {
        // if( Gate::denies('logged-in')){
        //     return redirect(route('login'))->with('error','You must be logged in');
        // };
        return view('profile.index');
    }

    public function destroyUser()
    {
        $id = Auth::user()->id;
        User::destroy($id);
        return redirect('/')->with('success','Profile deleted');
    }
}
