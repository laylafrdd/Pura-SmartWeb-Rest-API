<?php

namespace App\Http\Controllers;

use App\Models\TrainerFeedback;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class TrainerFeedbackController extends Controller
{
    public function showAll() //done
    {

        $Training = TrainerFeedback::all();
        return response()->json($Training);
    }

    public function showOne($id) //done
    {
        $Training = TrainerFeedback::find($id);
        return response()->json($Training);
    }

    public function create(Request $request) //done
    {

        $Training = new TrainerFeedback();

        $Training->pelafalan = $request->pelafalan;
        $Training->penguasaan = $request->penguasaan;
        $Training->kreativitas = $request->kreativitas;
        $Training->interaksi = $request->interaksi;
        $Training->penjelasan = $request->penjelasan;
        $Training->kesan_positif = $request->kesan_positif;
        $Training->kesan_negatif = $request->kesan_negatif;
        $Training->masukkan_training_selanjutnya = $request->masukkan_training_selanjutnya;
        $Training->isi_training = $request->isi_training;
        $Training->user = $request->user;


        $Training->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $Training = TrainerFeedback::find($id);

        $Training->pelafalan = $request->pelafalan;
        $Training->penguasaan = $request->penguasaan;
        $Training->kreativitas = $request->kreativitas;
        $Training->interaksi = $request->interaksi;
        $Training->penjelasan = $request->penjelasan;
        $Training->kesan_positif = $request->kesan_positif;
        $Training->kesan_negatif = $request->kesan_negatif;
        $Training->masukkan_training_selanjutnya = $request->masukkan_training_selanjutnya;
        $Training->isi_training = $request->isi_training;
        $Training->user = $request->user;


        $Training->save();

        return response()->json(["data" => $Training, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $Training = TrainerFeedback::find($id);
        $Training->delete();

        return response()->json(["data" => $Training, "message" => 'success']);
    }
}
