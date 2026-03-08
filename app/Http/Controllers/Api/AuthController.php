<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ], [], [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password' 
        ]);

        if($validator->fails()){
            return ApiResponse::sendResponse(422, 'Register Validation Errors', $validator->errors()->all());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password) 
        ]);

        $data = [];
        $data['token'] = $user->createToken('user')->plainTextToken;
        $data['name'] = $user->name;
        $data['email'] = $user->email;

        return ApiResponse::sendResponse(201, 'User Registered Successfully', $data);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required']
        ], [], [
            'email' => 'Email',
            'password' => 'Password' 
        ]);

        if($validator->fails()){
            return ApiResponse::sendResponse(422, 'Login Validation Errors', $validator->errors()->all());
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $data = [];
            $data['token'] = $user->createToken('user')->plainTextToken;
            $data['name'] = $user->name;
            $data['email'] = $user->email;

            return ApiResponse::sendResponse(200, 'User Logged In Successfully', $data);
        }

        return ApiResponse::sendResponse(401, 'User Login Failed', ['error' => 'Invalid Credentials']);
    }
}
