<?php

namespace App\Http\Controllers\api;

use App\Helpers\Util;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class DriverController extends Controller
{

    public function addDriver(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|same:confirm-password',
            'phone' => 'required|min:10|max:10',
            'phone' => 'required',
            'image' => 'required',
            'license_number' => 'required',
            'license_image' => 'required|image',
            'license_expiry_date' => 'required|date',
            'registration_number' => 'required',
            'company' => 'required',
            'model' => 'required',
            'color' => 'required',
            'capacity' => 'required',
            'year' => 'required',
            'puc_image' => 'required|image',
            'puc_expiry_date' => 'required|date',
            'rc_image' => 'required|image',
            'rc_expiry_date' => 'required|date',
            'insurance_image' => 'required|image',
            'insurance_expiry_date' => 'required|date',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $user->image = $imageName;
        $user->role = 'driver';
        $user->save();

        $driver = new Driver();
        $driver->user_id = $user->id;
        $driver->license_number = $request->license_number;
        $imageName = time() . '.' . $request->license_image->extension();
        $request->license_image->move(public_path('images'), $imageName);
        $driver->license_image = $imageName;
        $driver->license_expiry_date = $request->license_expiry_date;
        $driver->save();

        $vehicle = new Vehicle();
        $vehicle->driver_id = $driver->id;
        $vehicle->registration_number = $request->registration_number;
        $vehicle->makers = $request->company;
        $vehicle->model = $request->model;
        $vehicle->color = $request->color;
        $vehicle->capacity = $request->capacity;
        $vehicle->year = $request->year;
        $imageName = time() . '.' . $request->puc_image->extension();
        $request->puc_image->move(public_path('images'), $imageName);
        $vehicle->puc_image = $imageName;
        $vehicle->puc_expiry_date = $request->puc_expiry_date;
        $imageName = time() . '.' . $request->rc_image->extension();
        $request->rc_image->move(public_path('images'), $imageName);
        $vehicle->rc_image = $imageName;
        $vehicle->rc_expiry_date = $request->rc_expiry_date;
        $imageName = time() . '.' . $request->insurance_image->extension();
        $request->insurance_image->move(public_path('images'), $imageName);
        $vehicle->insurance_image = $imageName;
        $vehicle->insurance_expiry_date = $request->insurance_expiry_date;
        $vehicle->status = 'active';
        $vehicle->save();

        return Util::getSuccessMessage(
            $user . $vehicle . $driver,
            'Driver added successfully.'
        );
    }
}
