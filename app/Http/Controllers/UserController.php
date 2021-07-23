<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Todo;

class UserController extends Controller
{
    public function showAllUser() //done
    {
        return response()->json(User::all());
    }

    public function updateUser($id, Request $request) //done
    {
        $user = DB::table('users')
            ->where('username', $id)
            ->update([
                'nama' => $request->input('nama'),
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('password')),
                'email' => $request->input('email'),
                // 'nama' => $request->input('nama'),
                // 'aktivasi' => $request->input('nama'),
                // 'nama' => $request->input('nama'),
                // 'nama' => $request->input('nama'),
                'status_karyawan' => $request->input('status_karyawan'),
                // 'nama' => $request->input('nama'),
            ]);
        return response()->json([$user, 'message' => 'success']);
    }

    public function findOneUser($username) //done
    {
        $user = DB::table('users')->where('username', $username)->first();
        return response()->json($user, 200);
    }

    public function createdUser(Request $request) //done
    {
        $user = DB::table('users')
            ->insert([
                'nama' => $request->input('nama'),
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('password')),
                'email' => $request->input('email'),
                // 'password' => $request->input('nama'),
                // 'aktivasi' => $request->input('nama'),
                // 'created_at' -> ino
                // 'nama' => $request->input('nama'),
                'status_karyawan' => $request->input('status_karyawan'),
            ]);
        return response()->json([$user, 'message' => 'success']);
    }
    public function deleteUser($id) //done
    {
        $dataDelete = DB::table('users')
            ->where('id_user', $id)->delete();
        if ($dataDelete == 1) {
            return response()->json([
                'data' => $dataDelete,
                'code' => 200,
                'message' => 'success'
            ]);
        }
        if ($dataDelete == 0) {
            return response()->json(array(
                'code' => 404,
                'message' => 'id not found'
            ), 404);
        }
    }
}
