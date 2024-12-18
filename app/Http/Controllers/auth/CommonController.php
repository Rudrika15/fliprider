<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class CommonController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
            'c_password' => ['required', 'same:password'],
            'phone' => ['required', 'unique:users,phone', 'min:10', 'max:10'],
            'role' => ['required', 'in:admin,driver,rider'],
            'image' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ], 200);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['image'] = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
        $user = User::create($input);

        Auth::login($user);
        if ($request->role == 'driver') {
            $driver = new Driver();
            $driver->user_id = $user->id;
            $driver->save();
            // return $request;
            // send the  return $this->addVehicle($request); like this 
            return (new \App\Http\Controllers\DriverController)->addDriver($request);
        }


        $token =  $user->createToken('MyApp')->plainTextToken;
        $response = [
            'token' => $token,
            'data' => $user
        ];


        return response()->json([
            'status' => true,
            'message' => 'User Registered Successfully',
            'imagePath' => url('images/' . $user->image),
            'data' => $response
        ]);
    }
    //
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ], 200);
        }
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();
                $token =  $user->createToken('MyApp')->plainTextToken;
                $reponse = [
                    'token' => $token,
                    'data' => $user
                ];
                return response()->json([
                    'status' => true,
                    'data' => $reponse
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid Credentials'
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }
}
