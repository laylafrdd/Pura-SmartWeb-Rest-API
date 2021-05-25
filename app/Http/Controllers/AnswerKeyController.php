<?php

namespace App\Http\Controllers;

use App\Models\AnswerKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

// use Illuminate\Support\Facades\Hash;

class AnswerKeyController extends Controller
{
    public function showAllAnswerKey() //done
    {
        $Answer = AnswerKey::all();
        return response()->json($Answer);
    }

    public function showOne($id)//done
    {
        $Answer = AnswerKey::find($id);
        return response()->json($Answer);
    }

    public function createAnswerKey(Request $request) //done
    {
        $Answer = new AnswerKey();

        $Answer->soal_test = $request->soal_test;
        $Answer->opsi_test = $request->opsi_test;
        $Answer->opsi_test_pilih = $request->opsi_test_pilih;
        $Answer->soal_test_pilih = $request->soal_test_pilih;


        $Answer->save();

        return response()->json(["data" => $Answer, "message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $Answer = AnswerKey::find($id);
        
        $Answer->soal_test = $request->soal_test;
        $Answer->opsi_test = $request->opsi_test;
        $Answer->opsi_test_pilih = $request->opsi_test_pilih;
        $Answer->soal_test_pilih = $request->soal_test_pilih;

        $Answer->save();

        return response()->json(["data"=>$Answer, "messages" => "succes update data"]);
    }

    public function delete($id) //done
    {
        $Answer = AnswerKey::find($id);
        $Answer->delete();

        return response()->json('success deleted data');
    }
}
