<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function signup(Request $request)
    {
        try {
            $validatedData = validator::make($request->all(), [

                'name' => 'required|regex:/^[a-zA-Z\s]+$/',
                'username' => 'required|string|max:255|unique:users,username',
                'password' => 'required|min:6',
            ], [
                'name.regex' => 'The name must not contain numbers or special characters.',


            ]);
            if ($validatedData->invalid()) {
                return response()->json([
                    "msg" => $validatedData->errors(),
                    "success" => false,
                    'data' => []

                ], 422);
            }
            $user = User::create([
                'name' => $request->name,

                'username' => $request->username,
                'password' => Hash::make($request->password),


            ]);


            return response()->json([
                "success" => true,
                "msg" => "user created successfuly",
                "data" => ["user" => $user]

            ], 201);
        } catch (Exception $e) {
            return response()->json([
                "success" => false,
                "msg" => $e->getMessage(),
                "data" => ["user" => null]

            ]);
        }
    }
    public function login(Request $request)
    {
        $validatedData = validator::make($request->all(), [


            'username' => 'required|exists:users,username',
            'password' => 'required|min:6',
        ], [
            'name.regex' => 'The name must not contain numbers or special characters.',


        ]);
        if ($validatedData->invalid()) {
            return response()->json([
                "msg" => $validatedData->errors(),
                "success" => false,
                'data' => []

            ], 422);
        }
        $data = $request->only(["username", "password"]);
        $user = User::where('username', $request->username)->first();
        if (!$user) {

            return response()->json([
                "success" => false,
                "msg" => 'invalde creeds',
                "data" => []

            ], 400);
        }
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                "success" => false,
                "msg" => 'invalde creeds',
                "data" => []

            ], 400);
        }
        $token = $user->createToken("login")->plainTextToken;
        return response()->json([
            "success" => true,
            "msg" => 'loggedin successfully',
            "data" => ['user' => $user, "token" => $token]


        ]);
    }
    public function logout(Request $request)
    {
        $user = $request->user('api');
        $request->user('api')->currentAccessToken()->delete();
        return response()->json([
            "success" => true,
            "msg" => 'loggedout successfully',
            "data" => ['user' => $user]
        ]);
    }
}
