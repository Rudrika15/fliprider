<?php

namespace App\Http\Controllers;

use App\Models\MasterRate;
use App\Models\VehicleRule;
use Illuminate\Http\Request;

class VehicleRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicleRules = VehicleRule::paginate(10);
        return view('admin.vehicle_rule.index', compact('vehicleRules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicle_name = MasterRate::all();
        return view('admin.vehicle_rule.create', compact('vehicle_name'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required',
            'title'  => 'required',
            'description' => 'required',
        ]);

        $vehicle_rule = new VehicleRule;
        $vehicle_rule->master_id = $request->vehicle_id;
        $vehicle_rule->title = $request->title;
        $vehicle_rule->description = $request->description;
        $vehicle_rule->save();

        return redirect()->route('vehicles.rule.index')
            ->with('success', 'Vehicle Rule created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleRule $vehicleRule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rule = VehicleRule::find($id);
        $vehicle_name = MasterRate::all();
        return view('admin.vehicle_rule.edit', compact('rule', 'vehicle_name'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'vehicle_id' => 'required',
            'title'  => 'required',
            'description' => 'required',
        ]);

        $vehicle_rule = VehicleRule::find($id);
        $vehicle_rule->master_id = $request->vehicle_id;
        $vehicle_rule->title = $request->title;
        $vehicle_rule->description = $request->description;
        $vehicle_rule->save();

        return redirect()->route('vehicles.rule.index')
            ->with('success', 'Vehicle Rule updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicle_rule = VehicleRule::find($id);
        $vehicle_rule->delete();
        return redirect()->route('vehicles.rule.index')
            ->with('success', 'Vehicle Rule deleted successfully.');
    }
}
