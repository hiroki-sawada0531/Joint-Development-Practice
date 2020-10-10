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
        $person->fill($form)->save();
        return redirect('/profile');
    }
}
