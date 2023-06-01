<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Orderitem;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class MitraController extends Controller
{
    public function store(Request $request, User $user)
    {
        $user = Auth::guard('api')->user();
        $id = $user['id'];
        // dd($id);
        $input = $request->all();
        $input['users_id'] = $id;
        $input['name_barang'] = $request->name_barang;
        $input['stock_barang'] = $request->stock_barang;
        $input['jenis_barang'] = $request->jenis_barang;
        $input['harga_barang'] = $request->harga_barang;
        Makanan::create($input);

        if ($input) {
            return ["status" => "Berhasi Menyimpan Makanan", 201];
        } else {
            return ["status" => "Gagal Menyimpan Makanan"];
        }
    }
    public function index()
    {
        $user = Auth::guard('api')->user();
        $id = $user['id'];
        $makanan = Makanan::where('users_id', $id)->get();

        if (!$makanan) {
            return response()->json(["error" => "There is no role with name " . 'mitra'], 404);
        }
        return response()->json(["user" => $makanan], 200);
    }
    public function getOrderById($id) {
        $orders = Orderitem::with('makanan')->where('data_id', $id)->orderByDesc('created_at')->get();
    
        if ($orders->isNotEmpty()) {
            return response()->json(["user" => $orders], Response::HTTP_OK);
        } else {
            return response()->json(["error" => "No Orders Found for the given user ID!"], Response::HTTP_NOT_FOUND);
        }
    }
    public function getOrderByIdReq($id) {
        $orders = Orderitem::with('makanan')->where('data_id', $id)->where('status', 'Request')->get();
    
        if ($orders->isNotEmpty()) {
            return response()->json(["user" => $orders], Response::HTTP_OK);
        } else {
            return response()->json(["error" => "No Orders Found for the given user ID!"], Response::HTTP_NOT_FOUND);
        }
    }
    public function getOrderByIdonProg($id) {
        $orders = Orderitem::with('makanan')->where('data_id', $id)->where('status', 'On Progress')->get();
    
        if ($orders->isNotEmpty()) {
            return response()->json(["user" => $orders], Response::HTTP_OK);
        } else {
            return response()->json(["error" => "No Orders Found for the given user ID!"], Response::HTTP_NOT_FOUND);
        }
    }
    public function getOrderByIdComplete($id) {
        $orders = Orderitem::with('makanan')->where('data_id', $id)->where('status', 'Complete')->get();
    
        if ($orders->isNotEmpty()) {
            return response()->json(["user" => $orders], Response::HTTP_OK);
        } else {
            return response()->json(["error" => "No Orders Found for the given user ID!"], Response::HTTP_NOT_FOUND);
        }
    }
    public function hapusBarang($id)
    {
        $makanan = Makanan::where('id', $id)->first();
        if ($makanan->delete()) {
            return ["status" => "Berhasi Menghapus Data"];
        } else {
            return ["status" => "Gagal Menghapus Data"];
        }
    }
    public function updateBarang(Request $request, $id)
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
}