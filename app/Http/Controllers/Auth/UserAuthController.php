<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($data)) {
            return response(['error_message' => 'Incorrect info, please try again']);
        }

        $user = auth()->user();
        $this->updateUserDeviceToken($user->id, $request->get('device_token') );
        $token = $user->createToken('API Token')->accessToken;

        return response(['user' => auth()->user(), 'token' => $token]);

    }

    public function updateUserDeviceToken($user_id, $device_token = null) {

        $profile_repository = \App::make('profile_repository');

        $user_profile = $profile_repository->getFromUserId($user_id);

        $user_profile->device_token = $device_token;
        $user_profile->save();
    }
}
