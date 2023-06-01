<?php

namespace App\Http\Controllers;

use App\Models\BannerPengguna;
use Illuminate\Http\Request;

class BannerPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BannerPengguna $bannerPengguna)
    {
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(BannerPengguna $bannerPengguna)
    {
        $banner = BannerPengguna::all();
        
        return response()->json(['Success' => $banner], 200);

        // dd("asd");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BannerPengguna $bannerPengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BannerPengguna $bannerPengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BannerPengguna $bannerPengguna)
    {
        //
    }
}
