<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Http\Requests\EditProfileRequest;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Profile;

class HomesController extends Controller
{
    public function index()
    {
        $page_title = 'CV-Maker';
        
        return view('homes.index', compact('page_title'));
    }

    public function profile()
    {
        $page_title = 'My Profile';

        $profile = Profile::where('user_id', Auth::id())->first();

        //dd($profile);

        return view('homes.profile', compact('page_title', 'profile'));
    }

    public function editProfile(EditProfileRequest $request)
    {
        $profile = $request->all();
        unset($profile['first_name']);
        unset($profile['last_name']);

        $profile['user_id'] = Auth::id();

        $existingProfile = Profile::where('user_id', Auth::id())->first();

        $picture = "";
        //dd($request->hasFile('profile_picture'));

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        $profile['profile_picture'] = $picture;
        
        if ($request->hasFile('profile_picture')) {            
            $destinationPath = public_path() . '/img/users/';
            $request->file('profile_picture')->move($destinationPath, $picture);
        }

        dd($profile);

        if (!empty($existingProfile)) {
            $update = Profile::find($existingProfile->id);
            $update->update($profile);
        } else {
             Profile::create($profile);
        }
       

        Session::flash('success', 'The post has been saved.');
        return redirect('/profile');
    }
}
