<?php

namespace App\Http\Controllers;

use App\Models\TestOptions;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class TestOptionController extends Controller
{
    public function showAll() //done
    {

        $TestOptions = TestOptions::all();
        return response()->json($TestOptions);
    }

    public function showOne($id) //done
    {
        $TestOptions = TestOptions::find($id);
        return response()->json($TestOptions);
    }

    public function create(Request $request) //done
    {

        $TestOptions = new TestOptions();

        $TestOptions->opsi_test = $request->opsi_test;
        $TestOptions->kode_opsi = $request->kode_opsi;
        $TestOptions->soal_test = $request->soal_test;


        $TestOptions->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $TestOptions = TestOptions::find($id);

        $TestOptions->opsi_test = $request->opsi_test;
        $TestOptions->kode_opsi = $request->kode_opsi;
        $TestOptions->soal_test = $request->soal_test;


        $TestOptions->save();


        return response()->json(["data" => $TestOptions, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $TestOptions = TestOptions::find($id);
        $TestOptions->delete();

        return response()->json(["data" => $TestOptions, "message" => 'success']);
    }
}
