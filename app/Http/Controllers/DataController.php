<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Data::all();

        foreach ($data as $item) {
            $average = DB::table('rating_restos')
                ->where('data_id', $item->id)
                ->avg('rating_restoran');

            $roundedAverage = round($average, 1);
            $item->rating_restoran_overall = round($roundedAverage / 0.5) * 0.5;
        }

        return response()->json(['Success' => $data], 200);
    }

    public function indexactive()
    {
        $data = Data::all()->where('status', 'Active');

        foreach ($data as $item) {
            $average = DB::table('rating_restos')
                ->where('data_id', $item->id)
                ->avg('rating_restoran');

            $roundedAverage = round($average, 1);
            $item->rating_restoran_overall = round($roundedAverage / 0.5) * 0.5;
        }

        return response()->json(['Success' => $data], 200);
    }
    public function indexnotactive()
    {
        $data = Data::all()->where('status', 'Not Active')->toArray();

        foreach ($data as $item) {
            $average = DB::table('rating_restos')
                ->where('data_id', $item['id'])
                ->avg('rating_restoran');

            $roundedAverage = round($average, 1);
            $item['rating_restoran_overall'] = round($roundedAverage / 0.5) * 0.5;
        }

        $data = array_values($data);

        return response()->json(['Success' => $data], 200);
    }



    public function dataById($id)
    {
        $data = Data::find($id);

        if ($data) {
            $averageRating = DB::table('rating_restos')
                ->where('data_id', $id)
                ->avg('rating_restoran');

            $roundedAverage = round($averageRating, 1);
            $data->rating_restoran_overall = round($roundedAverage / 0.5) * 0.5;

            return response()->json(["data" => $data], 200);
        } else {
            return response()->json(["error" => "ID Not Found In Data!"], 404);
        }
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
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data $data, $id)
    {
        $data = Data::where('id', $id)->first();
        // dd($data);
        $data->name_restoran = $request->name_restoran;
        $data->notelp_restoran = $request->notelp_restoran;
        $data->alamat_restoran = $request->alamat_restoran;
        // $data->harga_barang = $request->harga_barang;
        if ($data->save()) {
            return ["status" => "Berhasi Mengupdate Data", 200];
        } else {
            return ["status" => "Gagal Mengupdate Data"];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $data)
    {
        //
    }
}