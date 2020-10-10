<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profile.index');
    }

    public function add(Request $request)
    {
        if(Auth::check()) {
            $user = Auth::user();
            return view('profile.add',['user'=> $user]);
        } else {
            return redirect('/');
        }
    }

    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = new Profile;
        $form = $request->all();
        unset($form['_token']);
        $profile->fill($form)->save();
        return redirect('/');
    }
}
