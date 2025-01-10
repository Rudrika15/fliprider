<?php

namespace App\Http\Controllers;

use App\Models\AdPlacement;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdPlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ad_placements = AdPlacement::paginate(10);
        return view('admin.ad_placement.index', compact('ad_placements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $advertisement = Advertisement::all();
        return view('admin.ad_placement.create', compact('advertisement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'placement'  => 'required',
        ]);

        $ad_placement = new AdPlacement;
        $ad_placement->placement = $request->placement;
        $ad_placement->save();

        return redirect()->route('advertisement.placement.index')
            ->with('success', 'Ad Placement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdPlacement $adPlacement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ad_placement = AdPlacement::find($id);
        return view('admin.ad_placement.edit', compact('ad_placement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'placement'  => 'required',
        ]);

        $ad_placement = AdPlacement::find($id);
        $ad_placement->placement = $request->placement;
        $ad_placement->save();

        return redirect()->route('advertisement.placement.index')
            ->with('success', 'Ad Placement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ad_placement = AdPlacement::find($id);
        $ad_placement->delete();
        return redirect()->route('advertisement.placement.index')
            ->with('success', 'Ad Placement deleted successfully.');
    }
}
