<?php

namespace App\Http\Controllers;

use App\Models\PollingOption;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class PollingOptionController extends Controller
{
    public function showAll() //done
    {

        $PollingOption = PollingOption::all();
        return response()->json($PollingOption);
    }

    public function showOne($id) //done
    {
        $PollingOption = PollingOption::find($id);
        return response()->json($PollingOption);
    }

    public function create(Request $request) //done
    {

        $PollingOption = new PollingOption();

        $PollingOption->opsi_polling = $request->opsi_polling;
        $PollingOption->isi_polling = $request->isi_polling;

        $PollingOption->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $PollingOption = PollingOption::find($id);

        $PollingOption->opsi_polling = $request->opsi_polling;
        $PollingOption->isi_polling = $request->isi_polling;

        $PollingOption->save();

        return response()->json(["data" => $PollingOption, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $PollingOption = PollingOption::find($id);
        $PollingOption->delete();

        return response()->json(["data" => $PollingOption, "message" => 'success']);
    }
}
