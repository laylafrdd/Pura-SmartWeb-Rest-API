<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showAll() //done
    {

        $Admin = Admin::all();
        return response()->json($Admin);
    }

    public function showOne($id) //done
    {
        $Admin = Admin::find($id);
        return response()->json($Admin);
    }

    public function create(Request $request) //done
    {

        $Admin = new Admin();

        $Admin->firstname = $request->firstname;
        $Admin->lastname = $request->lastname;
        $Admin->username = $request->username;
        $Admin->email = $request->email;
        $Admin->password = Hash::make($request->password);

        $Admin->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $Admin = Admin::find($id);

        $Admin->firstname = $request->firstname;
        $Admin->lastname = $request->lastname;
        $Admin->username = $request->username;
        $Admin->email = $request->email;
        // $Admin->password = Hash::make($request->password);

        $Admin->save();

        return response()->json(["data" => $Admin, "message" => "succes"]);
    }

    public function updatePassword(Request $request)
    {
        $admin = DB::table('admin')
            ->where('username', $request->input('username'))
            ->first();
        if (Hash::check($request->input('password'), $admin->password)) {
            $result = DB::table('admin')
                ->where('id_admin', $admin->id_admin)
                ->update([
                    'password' => Hash::make(
                        $request->input('passwordbaru')
                    ),
                ]);
            if ($result) {
                return response()->json(["success" => true], 200);
            } else {
                return response()->json(["success" => false, "message" => "update password gagal"], 500);
            }
        }

        return response()->json(['success' => false, "message" => "password lama anda salah"], 500);
    }

    public function delete($id) //done
    {
        # code...
        $Admin = Admin::find($id);
        $Admin->delete();

        return response()->json('success deleted');
    }

    public function loginAdmin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $Admin = DB::table('admin')->where('username', $request->input('username'))->first();

        if (Hash::check($request->input('password'), $Admin->password)) {
            Admin::where('username', $request->input('username'));;
            return response()->json(['status' => 'success', 'id_admin' => $Admin->id_admin]);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }

    public function showAdmin(Request $request)
    {
        $username = $request->input('username');
        $user = DB::table('admin')
            ->where('username', "=", $username)
            ->first();
        return response()->json($user);
    }
}
