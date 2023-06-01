<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Makanan;
use App\Models\Orderitem;
use App\Models\User;
use App\Models\Data;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


use Auth;

class UserController extends Controller
{

    public $successStatus = 200;

    /**
     * All User
     */

    public function loginUser(Request $request)
    {
        $input = $request->all();
        Auth::attempt($input);
        $user = Auth::user();
        $token = $user->createToken('nApp')->accessToken;
        $role = $user->getRoleNames();

        return Response(['status' => 200, 'token' => $token, 'role' => $role], 200);
    }
    public function getOrderById($id) {
        $orders = Orderitem::with('makanan','data')->where('users_id', $id)->get();
    
        if ($orders->isNotEmpty()) {
            return response()->json(["user" => $orders], Response::HTTP_OK);
        } else {
            return response()->json(["error" => "No Orders Found for the given user ID!"], Response::HTTP_NOT_FOUND);
        }
    }
    public function getOrderByIdComplete($id) {
        $orders = Orderitem::with('makanan')->where('users_id', $id)->where('status', 'Complete')->get();
    
        if ($orders->isNotEmpty()) {
            return response()->json(["user" => $orders], Response::HTTP_OK);
        } else {
            return response()->json(["error" => "No Orders Found for the given user ID!"], Response::HTTP_NOT_FOUND);
        }
    }
    public function getUserById($id) {
        if (User::where('id', $id)->exists()) {
            return response()->json(["user" => User::where('id', $id)->with('data.makanan', 'data.minuman', 'data.ratingResto')->get()], 200);
            // return response()->json(User::where('id', $id)->with('data.makanan', 'data.minuman')->get(), 200);
        } else {
            return response()->json(["error" => "ID Not Found In Users !"], 404);
        }
    }
    public function getUsersByRole($role) {
        $roles = Role::where('name', $role)->get();
        $users = User::role($role)->with('data.makanan', 'data.minuman')->get();
        if(!$roles) {
            return response()->json(["error" => "There is no role with name " . $role], 404);
        }
        return response()->json(["user" => $users], 200);
    }

    public function getUserDetail()
    {
        if (Auth::guard('api')->check()) {
            $user = Auth::guard('api')->user();
            $id = $user['id'];

            $user['role'] = $user->getRoleNames();
            $user['datas'] = Data::where('users_id', $id)->get();
            unset($user['roles']);

            return response()->json(['Success' => $user], 200);
            // return Response(['data' => $user], 200);
        }
        return Response(['data' => 'unauthorized'], 401);
    }


    public function UserLogout()
    {
        if (Auth::guard('api')->check()) {

            $accessToken = Auth::guard('api')->user()->token();
            \DB::table('oauth_refresh_tokens')
                ->where('access_token_id', $accessToken->id)
                ->update([
                    'revoked' => true
                ]);
            $accessToken->revoke();

            return Response(['data' => 'success', 'message' => 'User Logout Successfully'], 200);
        }
        return Response(['data' => 'unauthorized'], 401);
    }

/**
 * Admin
 */



}