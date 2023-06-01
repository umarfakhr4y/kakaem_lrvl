<?php

namespace App\Http\Controllers;

use App\Models\RatingResto;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingRestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     // $ratingresto = RatingResto::all();
    //     $user = User::all();
    //     $datas = RatingResto::with('user')->get(); 
    //     $ids = RatingResto::find('id');

    //     return response()->json(["Success" => $datas], 200);
    // }
    public function index()
    {
        $ratings = RatingResto::with('user')->get();
        $data = [];

        foreach ($ratings as $rating) {
            $user = User::find($rating->users_id);
            $data[] = [
                'id' => $rating->id,
                'ulasan' => $rating->ulasan,
                'rating_restoran' => $rating->rating_restoran,
                'user' => $user ? $user->toArray() : null
            ];
        }

        return response()->json($data);
    }
    // public function ratingByDataID($id)
    // {
    //     if (RatingResto::where('id', $id)->exists()) {

    //         return response()->json(["data" => RatingResto::where('data_id', $id)->get()], 200);
    //         // return response()->json(User::where('id', $id)->with('data.makanan', 'data.minuman')->get(), 200);
    //     } else {
    //         return response()->json(["error" => "ID Not Found In data !"], 404);
    //     }
    // }
    public function ratingByDataID($id)
    {
        if (RatingResto::where('id', $id)->exists()) {
            $ratings = RatingResto::where('data_id', $id)
            ->orderBy('created_at', 'asc')
            ->get();

            $data = [];

            foreach ($ratings as $rating) {
                $user = User::find($rating->users_id);

                if ($user) {
                    $data[] = [
                        'users_id' => $rating->users_id,
                        'name' => $user->name,
                        'image' => $user->image,
                        'ulasan' => $rating->ulasan,
                        'rating_restoran' => $rating->rating_restoran,
                        'created_at' => $rating->created_at
                    ];
                }
            }

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
        $input = $request->all();
        // $input['id'] = $request->id;
        $input['ulasan'] = $request->ulasan;
        $input['rating_restoran'] = $request->rating_restoran;
        $input['users_id'] = $request->users_id;
        $input['data_id'] = $request->data_id;
        // $input['return'] = $request->return;
        $rating = RatingResto::create($input);

        if ($rating) {
            return response()->json(['message' => "Succesfully adding rating", "data" => $input], 200);
        } else {
            return response()->json(['error' => "Failed adding rating", "data" => $input]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RatingResto $ratingResto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RatingResto $ratingResto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RatingResto $ratingResto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RatingResto $ratingResto)
    {
        //
    }
}