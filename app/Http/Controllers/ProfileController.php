<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use App\Image;

class ProfileController extends Controller
{
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

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

        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $path = $request->file->store('public');

            $file_name = basename($path);
            $user_id = Auth::id();
            $new_image_data = new Image();
            $new_image_data->user_id = $user_id;
            $new_image_data->file_name = $file_name;

            $new_image_data->save();
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors();
        }

        return redirect('/profile');
    }

    public function home() {
        $user = Auth::user();
        $images = Image::all();
        $profile = Profile::all();
        return view('profile.home',['user'=>$user,'images'=>$images,'profile' => $profile]);
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
        $profile->fill($form)->save();
        return redirect('/profile');
    }

    public function show(Request $request) {
        $form = Profile::find($request->id);
        return view('profile.show',['form' => $form]);
    }
}
