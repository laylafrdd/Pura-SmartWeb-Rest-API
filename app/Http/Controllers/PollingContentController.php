<?php

namespace App\Http\Controllers;

use App\Models\PollingContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

// use Illuminate\Support\Facades\Hash;

class PollingContentController extends Controller
{
    public function showAll() //done
    {

        $Conten = PollingContent::all();
        return response()->json($Conten);
    }

    public function showOne($id) //done
    {
        $Conten = PollingContent::find($id);
        return response()->json($Conten);
    }

    public function create(Request $request) //done
    {

        $Conten = new PollingContent();

        $Conten->isi_polling = $request->isi_polling;
        $Conten->kategori_polling = $request->kategori_polling;

        $Conten->save();

        return response()->json("Success add data");
    }

    public function update(Request $request, $id) //done
    {
        $Conten = PollingContent::find($id);

        $Conten->isi_polling = $request->isi_polling;
        $Conten->kategori_polling = $request->kategori_polling;

        $Conten->save();


        return response()->json(["data"=>$Conten, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $Conten = PollingContent::find($id);
        $Conten->delete();

        return response()->json('success deleted');
    }
}
