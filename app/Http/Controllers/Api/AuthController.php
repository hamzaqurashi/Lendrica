<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->password;

        $credentials = [
            'email' => $email,
            'password' => $password,
            'status' => 1,
        ];

        if (Auth::attempt($credentials)) {

            $user = User::where('email', $email)->firstOrFail();

        // if ($user['email_verified'] == 1) {

            $token = $user->createToken('auth_token')->plainTextToken;

            $data = array_merge($user->toArray(), ['token' => $token]);

            return response()->success($data);         
        // }
        // else{
        //     return response()->error(__('auth.notverified'));
        // }

        } else {
            return response()->error(__('auth.failed'));
        }

    }

    public function UpdateUserDetails(Request $request)
    {
        $userID = Auth::id();

        $data = $request->except('_method', '_token', 'submit');

        $updateuser = User::find($userID);

        if ($updateuser->update($data)) {
            return response()->success($updateuser);
        } else {
            return response()->error();
        }
    }

    public function signup(Request $request)
    {
            $payload = collect($request->all())
            ->merge([
                'password' => ($request->password),
            ])
            ->except(['cpassword'])
            ->all();

        $user = User::create($payload);

        // return response()->success($user, __('auth.registered'));

        if ($user) {
            return response()->success($user, __('auth.registered'));
        } else {
            return response()->error(__('messages.something_wrong'));
        }

    }
}
