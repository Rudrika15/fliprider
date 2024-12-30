<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::with(['user', 'vehicle'])->orderBy('id', 'DESC')->paginate(5);
        return view('admin.driver.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|same:confirm-password',
            'phone' => 'required|min:10|max:10',
            'phone' => 'required',
            'image' => 'required',
            'license_number' => 'required',
            'license_image' => 'required|image', // Ensure it's an image file
            'license_expiry_date' => 'required|date', // Ensure it's a valid date
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

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $user->image = $imageName;
        $user->role = 'driver';
        $user->save();

        $driver = new Driver;
        $driver->user_id = $user->id;
        $driver->license_number = $request->license_number;
        $imageName = time() . '.' . $request->license_image->extension();
        $request->license_image->move(public_path('images'), $imageName);
        $driver->license_image = $imageName;
        $driver->license_expiry_date = $request->license_expiry_date;
        $driver->save();

        $vehicle = new Vehicle;
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

        return redirect()->route('drivers.index')->with('success', 'Driver created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $driver = Driver::find($id);
        return view('admin.driver.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // return $user = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            // 'password' => 'required|same:confirm-password',
            'phone' => 'required|min:10|max:10',
            // 'image' => 'required',
            'license_number' => 'required',
            // // // 'license_image' => 'required|image', // Ensure it's an image file
            'license_expiry_date' => 'required|date', // Ensure it's a valid date
            'registration_number' => 'required',
            'company' => 'required',
            'model' => 'required',
            'color' => 'required',
            'capacity' => 'required',
            'year' => 'required',
            // // 'puc_image' => 'image',
            'puc_expiry_date' => 'required|date',
            // // 'rc_image' => 'image',
            'rc_expiry_date' => 'required|date',
            // // 'insurance_image' => 'image',
            'insurance_expiry_date' => 'required|date',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(
                public_path('images'),
                $imageName
            );
            if ($user->image) {
                unlink(public_path('images/' . $user->image));
            }
            $user->image = $imageName;
        }
        $user->role = 'driver';
        $user->save();

        $driver = Driver::where('user_id', $user->id)->first();
        $driver->license_number = $request->license_number;
        if ($request->hasFile('license_image')) {
            $imageName = time() . '.' . $request->license_image->extension();
            $request->license_image->move(public_path('images'), $imageName);
            if ($driver->license_image) {
                unlink(public_path('images/' . $driver->license_image));
            }
            $driver->license_image = $imageName;
        }
        $driver->license_expiry_date = $request->license_expiry_date;
        $driver->save();



        $vehicle = Vehicle::where('driver_id', $driver->id)->first();
        $vehicle->registration_number = $request->registration_number;
        $vehicle->makers = $request->company;
        $vehicle->model = $request->model;
        $vehicle->color = $request->color;
        $vehicle->capacity = $request->capacity;
        $vehicle->year = $request->year;
        if ($request->hasFile('puc_image')) {
            $imageName = time() . '.' . $request->puc_image->extension();
            $request->puc_image->move(public_path('images'), $imageName);
            if ($vehicle->puc_image) {
                unlink(public_path('images/' . $vehicle->puc_image));
            }
            $vehicle->puc_image = $imageName;
        }
        $vehicle->puc_expiry_date = $request->puc_expiry_date;
        if ($request->hasFile('rc_image')) {
            $imageName = time() . '.' . $request->rc_image->extension();
            $request->rc_image->move(public_path('images'), $imageName);
            if ($vehicle->rc_image) {
                unlink(public_path('images/' . $vehicle->rc_image));
            }
            $vehicle->rc_image = $imageName;
        }
        $vehicle->rc_expiry_date = $request->rc_expiry_date;
        if ($request->hasFile('insurance_image')) {
            $imageName = time() . '.' . $request->insurance_image->extension();
            $request->insurance_image->move(public_path('images'), $imageName);
            if ($vehicle->insurance_image) {
                unlink(public_path('images/' . $vehicle->insurance_image));
            }
            $vehicle->insurance_image = $imageName;
        }
        $vehicle->insurance_expiry_date = $request->insurance_expiry_date;
        $vehicle->status = 'active';
        $vehicle->save();
        
        return redirect()->route('drivers.index')->with('success', 'Driver updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect()->route('drivers.index')
            ->with('success', 'Driver deleted successfully');
    }
}
