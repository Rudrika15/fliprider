<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\Util;

class UserController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = User::query();
            if ($request->has('search')) {
                $query->where('name', 'like', '%' . $request->search . '%');
            }
            if ($request->has('orderBy') && $request->has('orderType')) {
                $query->orderBy($request->orderBy, $request->orderType ?? 'desc');
            }
            if ($request->has('paginate')) {
                $users = $query->paginate($request->paginate ?? 10);
            } else {
                $users = $query->get();
            }
            return Util::getSuccessMessage(
                $users,
                "Users Fetched Successfully"
            );
        } catch (\Throwable $th) {
            return Util::getErrorMessage(
                $th->getMessage(),
                "Something went wrong"
            );
        }
    }
}
