<?php

namespace App\Http\Controllers;

use App\Models\TrainingContent;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class TrainingContentController extends Controller
{
    public function showAll() //done
    {

        $Training = TrainingContent::join('kategoritraining', 'kategoritraining.id_training', '=', 'isitraining.kategori_training')
            ->select('isitraining.id_isi_training', 'isitraining.isi_training', 'isitraining.jenis_training', 'isitraining.created_at', 'kategoritraining.nama_training')
            ->get();
        return response()->json($Training);
    }

    public function showOne($id) //done
    {
        $Training = TrainingContent::find($id);
        return response()->json($Training);
    }

    public function create(Request $request) //done
    {

        $Training = new TrainingContent();

        $Training->isi_training = $request->isi_training;
        $Training->jenis_training = $request->jenis_training;
        $Training->kategori_training = $request->kategori_training;

        $Training->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $Training = TrainingContent::find($id);

        $Training->isi_training = $request->isi_training;
        $Training->jenis_training = $request->jenis_training;
        $Training->kategori_training = $request->kategori_training;

        $Training->save();

        return response()->json(["data" => $Training, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $Training = TrainingContent::find($id);
        $Training->delete();

        return response()->json(["data" => $Training, "message" => 'success']);
    }
}
