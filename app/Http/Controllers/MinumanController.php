<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $input = $request->all();
        // $input['id'] = $request->id;
        $input['name_barang'] = $request->name_barang;
        $input['stock_barang'] = $request->stock_barang;
        $input['jenis_barang'] = $request->jenis_barang;
        $input['harga_barang'] = $request->harga_barang;
        $input['data_id'] = $request->data_id;
        // $input['return'] = $request->return;
        $rating = Minuman::create($input);

        if ($rating) {
            return response()->json(['message' => "Succesfully adding food", "data" => $input], 200);                        
        } else {
            return response()->json(['error' => "Failed adding food", "data" => $input]);            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Minuman $minuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Minuman $minuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Minuman $minuman, $id)
    {
        $minuman = Minuman::where('id', $id)->first();
        // dd($minuman);
        $minuman->name_barang = $request->name_barang;
        $minuman->stock_barang = $request->stock_barang;
        $minuman->jenis_barang = $request->jenis_barang;
        $minuman->harga_barang = $request->harga_barang;
        if ($minuman->save()) {
            return ["status" => "Berhasi Mengupdate Data", 200];
        } else {
            return ["status" => "Gagal Mengupdate Data"];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Minuman $minuman, $id)
    {
        $minuman = Minuman::where('id', $id)->first();
        if ($minuman->delete()) {
            return ["status" => "Berhasi Menghapus Data"];
        } else {
            return ["status" => "Gagal Menghapus Data"];
        }
    }
}
