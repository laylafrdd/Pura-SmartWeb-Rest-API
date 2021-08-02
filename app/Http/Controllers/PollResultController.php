<?php

namespace App\Http\Controllers;

use App\Models\PollResult;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class PollResultController extends Controller
{
    public function showAll() //done
    {

        $PollResult = PollResult::all();
        return response()->json($PollResult);
    }

    public function showOne($id) //done
    {
        $PollResult = PollResult::find($id);
        return response()->json($PollResult);
    }

    public function create(Request $request) //done
    {

        $PollResult = new PollResult();

        $PollResult->polling = $request->polling;
        $PollResult->pilihan_user = $request->pilihan_user;
        $PollResult->user = $request->user;
        $PollResult->isi_polling = $request->isi_polling;
        $PollResult->opsi_polling = $request->opsi_polling;

        $PollResult->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $PollResult = PollResult::find($id);

        $PollResult->polling = $request->polling;
        $PollResult->pilihan_user = $request->pilihan_user;
        $PollResult->user = $request->user;
        $PollResult->isi_polling = $request->isi_polling;
        $PollResult->opsi_polling = $request->opsi_polling;

        $PollResult->save();

        return response()->json(["data" => $PollResult, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $PollResult = PollResult::find($id);
        $PollResult->delete();

        return response()->json(["data" => $PollResult, "message" => 'success']);
    }
}
