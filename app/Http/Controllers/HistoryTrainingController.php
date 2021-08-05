<?php

namespace App\Http\Controllers;

use App\Models\TrainingHistory;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class HistoryTrainingController extends Controller
{
    public function showAll() //done
    {

        $TrainingHistory = TrainingHistory::join('users', 'users.id_user', '=', 'historytraining.user')
        ->select('historytraining.id_history_training','historytraining.nama_history_training', 'historytraining.created_at', 'users.nama')
        ->get();
        return response()->json($TrainingHistory);
    }

    public function showOne($id) //done
    {
        $TrainingHistory = TrainingHistory::find($id);
        return response()->json($TrainingHistory);
    }

    public function create(Request $request) //done
    {

        $TrainingHistory = new TrainingHistory();

        $TrainingHistory->nama_history_training = $request->nama_history_training;
        $TrainingHistory->user = $request->user;

        $TrainingHistory->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $TrainingHistory = TrainingHistory::find($id);

        $TrainingHistory->nama_history_training = $request->nama_history_training;
        $TrainingHistory->user = $request->user;


        $TrainingHistory->save();

        return response()->json(["data" => $TrainingHistory, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $TrainingHistory = TrainingHistory::find($id);
        $TrainingHistory->delete();

        return response()->json(["data" => $TrainingHistory, "message" => 'success']);
    }
}
