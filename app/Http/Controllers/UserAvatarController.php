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
    	$user = User::find(Auth::id());
    	$current_picture = $user->avatar;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time() . rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $destinationPath = storage_path('app\avatars');
            $file->move($destinationPath, $name);
            $user->avatar = $name;
            $user->save();
            if (file_exists(public_path('avatars/'.$current_picture)) and $current_picture !== null) unlink(public_path('avatars/'.$current_picture));
        }

        return redirect('home');
    }
}
