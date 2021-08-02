<?php

namespace App\Http\Controllers;

use App\Models\TestQuestion;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class TestQuestionController extends Controller
{
    public function showAll() //done
    {

        $TestQuestion = TestQuestion::all();
        return response()->json($TestQuestion);
    }

    public function showOne($id) //done
    {
        $TestQuestion = TestQuestion::find($id);
        return response()->json($TestQuestion);
    }

    public function create(Request $request) //done
    {

        $TestQuestion = new TestQuestion();

        $TestQuestion->soal_test = $request->soal_test;
        $TestQuestion->kode_soal = $request->kode_soal;
        $TestQuestion->master_test = $request->master_test;


        $TestQuestion->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $TestQuestion = TestQuestion::find($id);

        $TestQuestion->soal_test = $request->soal_test;
        $TestQuestion->kode_soal = $request->kode_soal;
        $TestQuestion->master_test = $request->master_test;


        $TestQuestion->save();

        return response()->json(["data" => $TestQuestion, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $TestQuestion = TestQuestion::find($id);
        $TestQuestion->delete();

        return response()->json(["data" => $TestQuestion, "message" => 'success']);
    }
}
