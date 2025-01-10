<?php

namespace App\Http\Controllers;

use App\Models\AdPlacement;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = Advertisement::paginate(10);
        return view('admin.advertisement.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $placements = AdPlacement::all();
        return view('admin.advertisement.create', compact('placements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'placement_id' => 'required',
            'title'  => 'required',
            'type' => 'required',
            'start_date' => 'date',
            'end_date' => 'date',
        ]);

        $advertisement = new Advertisement;
        $advertisement->placement_id = $request->placement_id;
        $advertisement->title = $request->title;
        $advertisement->content = $request->content;
        if ($request->hasFile('media')) {
            $image = $request->file('media');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('admin/images/advertise');
            $image->move($destinationPath, $name);
            $advertisement->media = $name;
        }
        $advertisement->type = $request->type;
        $advertisement->target_url = $request->target_url;
        $advertisement->status = $request->status;
        $advertisement->start_date = $request->start_date;
        $advertisement->end_date = $request->end_date;
        $advertisement->save();

        return redirect()->route('advertisement.index')
            ->with('success', 'Advertisement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $advertisement = Advertisement::find($id);
        $placements = AdPlacement::all();
        return view('admin.advertisement.edit', compact('advertisement', 'placements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'title'  => 'required',
            'type' => 'required',
            'start_date' => 'date',
            'end_date' => 'date',
        ]);

        $advertisement = Advertisement::find($id);
        $advertisement->title = $request->title;
        $advertisement->content = $request->content;
        if ($request->hasFile('media')) {
            $image = $request->file('media');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('admin/images/advertise');
            $image->move($destinationPath, $name);
            if (file_exists(public_path('admin/images/advertise/' . $advertisement->media))) {
                unlink(public_path('admin/images/advertise/' . $advertisement->media));
            }
            $advertisement->media = $name;
        }
        $advertisement->type = $request->type;
        $advertisement->target_url = $request->target_url;
        $advertisement->status = $request->status;
        $advertisement->start_date = $request->start_date;
        $advertisement->end_date = $request->end_date;
        $advertisement->save();

        return redirect()->route('advertisement.index')
            ->with('success', 'Advertisement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $advertisement = Advertisement::find($id);
        $advertisement->delete();
        return redirect()->route('advertisement.index')
            ->with('success', 'Advertisement deleted successfully.');
    }
}
