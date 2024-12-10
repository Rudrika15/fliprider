<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    //
    public function addDriver(Request $request)
    {
        // Validate request inputs
        $validator = Validator::make($request->all(), [
            'license_number' => 'required|string',
            'license_image' => 'required|image', // Ensure it's an image file
            'license_expiry_date' => 'required|date', // Ensure it's a valid date
        ]);

        // Return validation errors if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ], 400);
        }

        try {
            // Get the authenticated user ID
            $user_id = Auth::id();

            // Create a new Driver instance
            $driver = new Driver();
            $driver->user_id = $user_id;
            $driver->license_number = $request->license_number;

            // Handle license image upload
            if ($request->hasFile('license_image')) {
                $file = $request->file('license_image');
                $license_image = time() . '_license.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $license_image);
                $driver->license_image = $license_image;
            }

            // Set the license expiry date
            $driver->license_expiry_date = $request->license_expiry_date;

            // Save the driver to the database
            $driver->save();

            // Return success response
            return response()->json([
                'status' => true,
                'message' => 'Driver added successfully',
                'data' => $driver
            ]);
        } catch (\Exception $e) {
            // Handle any unexpected errors
            return response()->json([
                'status' => false,
                'message' => 'An error occurred while adding the driver.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function addVehicle(Request $request)
    {
        // Validate request inputs
        $validator = Validator::make($request->all(), [
            'registration_number' => 'required',
            'makers' => 'required',
            'model' => 'required',
            'year' => 'required',
            'color' => 'required',
            'capacity' => 'required',
            'puc_image' => 'required|image',
            'puc_expiry_date' => 'required|date',
            'insurance_image' => 'required|image',
            'insurance_expiry_date' => 'required|date',
            'rc_image' => 'required|image',
            'rc_expiry_date' => 'required|date',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ], 400);
        }

        try {
            // Get authenticated driver ID
            $driver_id = Auth::id();

            // Create a new vehicle instance
            $vehicle = new Vehicle();
            $vehicle->driver_id = $driver_id;
            $vehicle->registration_number = $request->registration_number;
            $vehicle->makers = $request->makers;
            $vehicle->model = $request->model;
            $vehicle->year = $request->year;
            $vehicle->color = $request->color;
            $vehicle->capacity = $request->capacity;

            // Handle PUC image upload
            if ($request->hasFile('puc_image')) {
                $file = $request->file('puc_image');
                $puc_image = time() . '_puc.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $puc_image);
                $vehicle->puc_image = $puc_image;
            }

            $vehicle->puc_expiry_date = $request->puc_expiry_date;

            // Handle Insurance image upload
            if ($request->hasFile('insurance_image')) {
                $file = $request->file('insurance_image');
                $insurance_image = time() . '_insurance.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $insurance_image);
                $vehicle->insurance_image = $insurance_image;
            }

            $vehicle->insurance_expiry_date = $request->insurance_expiry_date;

            // Handle RC image upload
            if ($request->hasFile('rc_image')) {
                $file = $request->file('rc_image');
                $rc_image = time() . '_rc.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $rc_image);
                $vehicle->rc_image = $rc_image;
            }

            $vehicle->rc_expiry_date = $request->rc_expiry_date;
            $vehicle->status = 'inactive';

            // Save the vehicle to the database
            $vehicle->save();

            return response()->json([
                'status' => true,
                'message' => 'Vehicle Added Successfully',
                'data' => $vehicle
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred while adding the vehicle.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
