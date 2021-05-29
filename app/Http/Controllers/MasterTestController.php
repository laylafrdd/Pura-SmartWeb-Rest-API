<?php

namespace App\Http\Controllers;

use App\Models\MasterTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

// use Illuminate\Support\Facades\Hash;

class MasterTestController extends Controller
{
    public function showAll() //done
    {

        $Master = MasterTest::all();
        return response()->json($Master);
    }

    public function showOne($id) //done
    {
        $Master = MasterTest::find($id);
        return response()->json($Master);
    }

    public function create(Request $request) //done
    {

        $Master = new MasterTest();

        $Master->nama_test = $request->nama_test;

        $Master->save();

        return response()->json("Success add data");
    }

    public function update(Request $request, $id) //done
    {
        $Master = MasterTest::find($id);

        $Master->nama_test = $request->nama_test;

        $Master->save();

        return response()->json(["data"=>$Master, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $Master = MasterTest::find($id);
        $Master->delete();

        return response()->json('success deleted');
    }
}
