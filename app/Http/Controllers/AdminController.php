<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Intervention\Image\Facades\Image;
use App\Models\Makanan;
use Auth;




class AdminController extends Controller
{
    public $successStatus = 200;
    public static function quickRandom($length = 15)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
    public function RegisterUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // "image" => "required|image:jpeg,png,jpg|max:2048"
            'email'=>'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'password'=>'required|min:8',
        ]);
        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()], 500);
        }
        $input = $request->all();
        // $input['user_id'] = $userId;
        $input['name'] = $request->name;
        $input['no_telp'] = $request->no_telp;
        $input['alamat'] = $request->alamat;
        $input['lahir'] = $request->lahir;
        $input['email'] = $request->email;
        $input['password'] = $request->password;
        $input['role'] = $request->role;


        if ($request->file()) {
            $img = $request->file('image');
            $name_file = uniqid() . "." . $img->extension();
            Image::make($request->file('image'))->resize(300, 300)->save('profile_img/' . $name_file);


            $input['image'] = $name_file;
        } else {
            $input['image'] = $request->image;

        }

        $input['password'] = bcrypt($input['password']);


        $user = User::create($input);
        $userId = $user->id;
        if ($input['role'] == 'admin') {
            $user->assignRole('admin');
        }
        if ($input['role'] == 'mitra') {
            $user->assignRole('mitra');
        }
        if ($input['role'] == 'pengguna') {
            $user->assignRole('pengguna');
        }

        $success['token'] = $user->createToken('nApp')->accessToken;
        $success['name'] = $user->name;
        $success['image'] = $user->image;
        $success['role'] = $user->getRoleNames();
        return response()->json(['success' => $success], $this->successStatus);
        // return $image;
    }


    public function Listmitra()
    {
        $user = Auth::guard('api')->user();
        $id = $user['id'];

        $roles = Role::where('name', 'mitra')->get();
        $users = User::role('mitra')->with('makanan')->get();
        // $user['makanan'] = Makanan::where('users_id', $id)->get(); Makanan::where('users_id', $id)
        if (!$roles) {
            return response()->json(["error" => "There is no role with name " . 'mitra'], 404);
        }
        return response()->json(["user" => $users], 200);
    }
    public function editUser(Request $request, User $user)
    { 
        $user = Auth::guard('api')->user();
        $id = $user['id'];
        $update = User::where('id',$id)->first();
        $update->name = $request->name;
        $update->email = $request->email;                    
        // $update->role = $request->role;                    
        $update->no_telp = $request->no_telp;                    
        $update->alamat = $request->alamat;                    
        // $update->lahir = $request->lahir;                                    

        if ($update->update()) {
            return ["status" => "Berhasi Mengupdate Data"];
        }  else {
            return ["status" => "Gagal Mengupdate Data"];
        };
    }    

}