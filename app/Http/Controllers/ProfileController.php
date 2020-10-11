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
        return redirect('/profile');
    }

    public function home() {
        return view('profile.home');
    }

    public function edit(Request $request)
    {
        $profile = Profile::find($request->id);
        return view('profile.edit', ['form' => $profile]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = Profile::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        echo '<pre>';
        var_dump($form);
        echo '</pre>';
        // exit();
        $profile->fill($form)->save();
        return redirect('/profile');
    }
}
