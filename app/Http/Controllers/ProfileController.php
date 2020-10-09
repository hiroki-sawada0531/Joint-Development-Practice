<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profile.index');
    }

    public function add(Request $request)
    {
        return view('profile.add');
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
