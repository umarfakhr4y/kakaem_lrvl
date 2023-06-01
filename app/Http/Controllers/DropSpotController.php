<?php

namespace App\Http\Controllers;

use App\Models\DropSpot;
use Illuminate\Http\Request;

class DropSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DropSpot::all();
        return response()->json(['Success' => $data], 200);
    }
    public function indexwithid($id)
    {
        $data = DropSpot::where('id_lokasi', $id)->get();

        return response()->json(['Success' => $data], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DropSpot $dropSpot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DropSpot $dropSpot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DropSpot $dropSpot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DropSpot $dropSpot)
    {
        //
    }
}