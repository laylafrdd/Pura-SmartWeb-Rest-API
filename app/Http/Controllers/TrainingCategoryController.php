<?php

namespace App\Http\Controllers;

use App\Models\TrainingCategory;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class TrainingCategoryController extends Controller
{
    public function showAll() //done
    {

        $Training = TrainingCategory::all();
        return response()->json($Training);
    }

    public function showOne($id) //done
    {
        $Training = TrainingCategory::find($id);
        return response()->json($Training);
    }

    public function create(Request $request) //done
    {

        $Training = new TrainingCategory();

        $Training->nama_training = $request->nama_training;
        $Training->deskripsi_training = $request->deskripsi_training;
        $Training->waktu_training = $request->waktu_training;
        $Training->user = $request->user;
        // $Admin->password = Hash::make($request->password);

        $Training->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $Training = TrainingCategory::find($id);

        $Training->nama_training = $request->nama_training;
        $Training->deskripsi_training = $request->deskripsi_training;
        $Training->waktu_training = $request->waktu_training;
        $Training->user = $request->user;
        // $Admin->password = Hash::make($request->password);

        $Training->save();

        return response()->json(["data" => $Training, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $Training = TrainingCategory::find($id);
        $Training->delete();

        return response()->json(["data" => $Training, "message" => 'success']);
    }
}
