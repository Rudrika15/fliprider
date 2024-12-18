<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class Util
{
    public static function getSuccessMessage($data, $message = "Success")
    {
        return \response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], 200);
        // get data and delete 
    }

    public static function getErrorMessage($message = "Error")
    {
        return \response()->json([
            'status' => false,
            'message' => $message,
        ], 200);
    }
    public static function serverErrorMessage($message = "Error")
    {
        return \response()->json([
            'status' => false,
            'message' => $message,
        ], 500);
    }

    public static function postSuccessMessage($data, $message = "Success")
    {
        return \response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], 201);
        // edit and store 
    }

    public static function authenticate($id)
    {
        if (Auth::id() != $id) {
            return \response()->json([
                'status' => false,
                'message' => "You are not authenticated"
            ], 200);
        }
    }
}
