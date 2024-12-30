<?php

namespace App\Http\Controllers;

use App\Models\MasterRate;
use App\Models\VehicleFaq;
use Illuminate\Http\Request;

class VehicleFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicle_faqs = VehicleFaq::paginate(10);
        return view('admin.vehicle_faq.index', compact('vehicle_faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicle_name = MasterRate::all();
        return view('admin.vehicle_faq.create', compact('vehicle_name'));
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

        $vehicle_faq = new VehicleFaq;
        $vehicle_faq->master_id = $request->vehicle_id;
        $vehicle_faq->title = $request->title;
        $vehicle_faq->description = $request->description;
        $vehicle_faq->save();

        return redirect()->route('vehicles.faq.index')
            ->with('success', 'Vehicle Faq created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleFaq $vehicleFaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faq = VehicleFaq::find($id);
        $vehicle_name = MasterRate::all();
        return view('admin.vehicle_faq.edit', compact('faq', 'vehicle_name'));
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

        $vehicle_faq = VehicleFaq::find($id);
        $vehicle_faq->master_id = $request->vehicle_id;
        $vehicle_faq->title = $request->title;
        $vehicle_faq->description = $request->description;
        $vehicle_faq->save();

        return redirect()->route('vehicles.faq.index')
            ->with('success', 'Vehicle Faq updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicle_faq = VehicleFaq::find($id);
        $vehicle_faq->delete();
        return redirect()->route('vehicles.faq.index')
            ->with('success', 'Vehicle Faq deleted successfully.');
    }
}
