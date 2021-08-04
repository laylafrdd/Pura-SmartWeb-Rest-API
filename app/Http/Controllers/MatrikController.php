<?php

namespace App\Http\Controllers;

use App\Models\Matriks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

// use Illuminate\Support\Facades\Hash;

class MatrikController extends Controller
{
    public function showAll() //done
    {

        //$Matrik = Matriks::all();

        $matriks = Matriks::join('users', 'users.id_user', '=', 'matriks.user')
            ->select('matriks.id_matriks','matriks.bulan_matriks','matriks.nilai_performa','matriks.created_at','users.nama', 'users.id_user')
            ->get();

        return response()->json($matriks);
    }

    public function showOneById($id) //done
    {
        $Matrik = Matriks::find($id);
        return response()->json($Matrik);
    }

    public function create(Request $request) //done
    {

        $Matrik = new Matriks();

        $Matrik->bulan_matriks = $request->bulan_matriks;
        $Matrik->nilai_performa = $request->nilai_performa;
        $Matrik->user = $request->user;

        $Matrik->save();

        return response()->json("Success add data");
    }

    public function update(Request $request, $id) //done
    {
        $Matrik = Matriks::find($id);

        $Matrik->bulan_matriks = $request->bulan_matriks;
        $Matrik->nilai_performa = $request->nilai_performa;
        $Matrik->user = $request->user;

        $Matrik->save();

        return response()->json(["data" => $Matrik, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $Matrik = Matriks::find($id);
        $Matrik->delete();

        return response()->json('success deleted');
    }
}
