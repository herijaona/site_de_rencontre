<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserAvatarController extends Controller
{
    public function update(Request $request)
    {
    	//get the current profile picture
    	$user = User::find(Auth::id());
    	$current_picture = $user->avatar;

    	//upload the file
    	$path = $request->file('avatar')->store('avatars');

    	//delete the current profile picture
    	if($current_picture != 'avatars/default.png' && $path) {
    		Storage::delete($current_picture);
    	}

		//update the user
        $user->avatar = $path;
        $user->save();

        return redirect('home');
    }
}
