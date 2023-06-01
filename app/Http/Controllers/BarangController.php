<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Makanan::select("*")->orderBy("name_barang", "asc");
        if ($request->keyword) {
            $query = $request->keyword;
            $data->where(function ($q) use ($query) {
                $q->where('name_barang', 'LIKE', "%" . $query . "%")
                    ->orWhere('stock_barang', 'LIKE', "%" . $query . "%")
                    ->orWhere('jenis_barang', 'LIKE', "%" . $query . "%")
                    ->orWhere('harga_barang', 'LIKE', "%" . $query . "%");
            });

        }
        return $data->paginate(10);
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
        $rating = Makanan::create($input);

        if ($rating) {
            return response()->json(['message' => "Succesfully adding food", "data" => $input], 200);
        } else {
            return response()->json(['error' => "Failed adding food", "data" => $input]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Makanan $makanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Makanan $makanan, $id)
    {
        $makanan = Makanan::where('id', $id)->first();
        // dd($makanan);
        $makanan->name_barang = $request->name_barang;
        $makanan->stock_barang = $request->stock_barang;
        $makanan->jenis_barang = $request->jenis_barang;
        $makanan->harga_barang = $request->harga_barang;
        if ($makanan->save()) {
            return ["status" => "Berhasi Mengupdate Data", 200];
        } else {
            return ["status" => "Gagal Mengupdate Data"];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Makanan $makanan, $id)
    {
        $makanan = Makanan::where('id', $id)->first();
        if ($makanan->delete()) {
            return ["status" => "Berhasi Menghapus Data"];
        } else {
            return ["status" => "Gagal Menghapus Data"];
        }
    }
}