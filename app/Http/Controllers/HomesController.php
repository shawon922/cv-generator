<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Http\Requests\EditProfileRequest;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Auth;
use App\Profile;
use App\User;

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

        $user = User::where('id', Auth::id())->first();
        //dd($user);
        $profile['first_name'] = $user['first_name'];
        $profile['last_name'] = $user['last_name'];

        //dd($profile);

        return view('homes.profile', compact('page_title', 'profile'));
    }

    public function editProfile(EditProfileRequest $request)
    {
        $profile = $request->all();
        //dd($request->hasFile('profile_picture'));
        //dd($request);

        $user['first_name'] = $profile['first_name'];
        $user['last_name'] = $profile['last_name'];

        unset($profile['first_name']);
        unset($profile['last_name']);

        $profile['user_id'] = Auth::id();

        $existingProfile = Profile::where('user_id', Auth::id())->first();
        $userUpdate = User::find(Auth::id());
        $userUpdate->update($user);

        $picture = "";
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        
        if (!empty($profile['profile_picture'])) {
            $profile['profile_picture'] = $picture;
        } else {
            unset($profile['profile_picture']);
        }
        

        if ($request->hasFile('profile_picture')) {            
            $destinationPath = public_path() . '/img/users/';
            $request->file('profile_picture')->move($destinationPath, $picture);
        }

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
