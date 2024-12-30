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
            'vehicle_type' => 'required',
            'distance' => 'required|numeric|min:0',
            'vehicle_type' => 'required',
        ]);

        $vehicleTypes = [
            'car' => [
                'rate' => 20,
                'extra_distance_rate' => 10
            ],
            'bike' => [
                'rate' => 15,
                'extra_distance_rate' => 8
            ],
            'rikshaw' => [
                'rate' => 20,
                'extra_distance_rate' => 5
            ]
        ];

        $perKmRate = $vehicleTypes[$request->vehicle_type]['rate']; // Rate per kilometer
        $baseFare = $perKmRate * $request->distance; // Base fare in your currency
        $vehicleTypes = $vehicleTypes[$request->vehicle_type];

        if ($request->extra_distance) {
            $extraDistance = $request->extra_distance;
            $extraFare = $extraDistance * $vehicleTypes['extra_distance_rate'];
            $baseFare += $extraFare;
        }

        return view('driver.fare', compact('baseFare'));
    }
}
