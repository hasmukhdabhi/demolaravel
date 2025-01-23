<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use APP\Models\User;
class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "email" => "required|email",
            "password" => "required",
            "confirm_password" => "required|same:password"

        ]);
        if ($validator->fails()) {

            return response()->json([
                'status' => 0,
                'errors' => "Validation Errors",
                "data" => $validator->errors()->all()
            ]);
        }

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        $response = [];
        $response["token"] = $user->createToken("MyApp")->plainTextToken;
        $response["name"] = $user->name;
        $response["email"] = $user->email;

        return response()->json([
            'status' => 1,
            'data' => $response,
            'message' => "User Created Successfully"
        ]);
    }
}
