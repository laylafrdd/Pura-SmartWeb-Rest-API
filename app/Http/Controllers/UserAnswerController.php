<?php

namespace App\Http\Controllers;

use App\Models\UserAnswer;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class UserAnswerController extends Controller
{
    public function showAll() //done
    {

        $UserAnswer = UserAnswer::all();
        return response()->json($UserAnswer);
    }

    public function showOne($id) //done
    {
        $UserAnswer = UserAnswer::find($id);
        return response()->json($UserAnswer);
    }

    public function delete($id) //done
    {
        # code...
        $UserAnswer = UserAnswer::find($id);
        $UserAnswer->delete();

        return response()->json(["data" => $UserAnswer, "message" => 'success']);
    }
}
