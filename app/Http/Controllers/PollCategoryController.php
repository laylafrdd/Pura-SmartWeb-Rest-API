<?php

namespace App\Http\Controllers;

use App\Models\PollCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

// use Illuminate\Support\Facades\Hash;

class PollCategoryController extends Controller
{
    public function showAll() //done
    {

        $Poll = PollCategory::all();
        return response()->json($Poll);
    }

    public function showOne($id) //done
    {
        $Poll = PollCategory::find($id);
        return response()->json($Poll);
    }

    public function create(Request $request) //done
    {

        $Poll = new PollCategory();

        $Poll->jenis_polling = $request->jenis_polling;
        $Poll->keterangan_polling = $request->keterangan_polling;

        $Poll->save();

        return response()->json("Success add data");
    }

    public function update(Request $request, $id) //done
    {
        $Poll = PollCategory::find($id);

        $Poll->jenis_polling = $request->jenis_polling;
        $Poll->keterangan_polling = $request->keterangan_polling;

        $Poll->save();

        return response()->json(["data" => $Poll, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $Poll = PollCategory::find($id);
        $Poll->delete();

        return response()->json('success deleted');
    }
}
