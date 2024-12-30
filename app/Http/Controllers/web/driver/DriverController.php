<?php

namespace App\Http\Controllers\web\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function request(Request $request)
    {
        return view('driver.requestFare');
    }
    public function fare(Request $request)
    {
        $request->validate([
            'distance' => 'required|numeric|min:0',
            'vehicle_type' => 'required',
        ]);

        // Fare calculation parameters
        $perKmRate = 10; // Rate per kilometer
        $baseFare = $perKmRate * $request->distance; // Base fare in your currency

        if ($request->extra_distance) {
            $extraDistance = $request->extra_distance;
            $extraFare = $perKmRate * $extraDistance;
            $baseFare += $extraFare;
        }

        return view('driver.fare', compact('baseFare'));
    }
}
