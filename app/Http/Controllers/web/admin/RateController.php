<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use App\Models\MasterRate;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rates = Rate::paginate(10);
        return view('admin.rate.index', compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $masterRates = MasterRate::all();
        return view('admin.rate.create', compact('masterRates'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required',
            'rate' => 'required',
            'extra_rate' => 'required'
        ]);

        $rate = new Rate;
        $rate->master_id = $request->vehicle_id;
        $rate->rate = $request->rate;
        $rate->extra_rate = $request->extra_rate;
        $rate->save();

        return redirect()->route('rates.index')
            ->with('success', 'Rate created successfully.');
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
        $rate = Rate::find($id);
        $masterRates = MasterRate::all();
        return view('admin.rate.edit', compact('rate', 'masterRates'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'vehicle_id' => 'required',
            'rate' => 'required',
            'extra_rate' => 'required'
        ]);

        $rate = Rate::find($id);
        $rate->master_id = $request->vehicle_id;
        $rate->rate = $request->rate;
        $rate->extra_rate = $request->extra_rate;
        $rate->save();

        return redirect()->route('rates.index')
            ->with('success', 'Rate updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rate = Rate::find($id);
        $rate->delete();
        return redirect()->route('rates.index')
            ->with('success', 'Rate deleted successfully.');
    }
}
