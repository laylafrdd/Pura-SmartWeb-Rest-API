<?php

namespace App\Http\Controllers;

use App\Models\EmployeeStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

// use Illuminate\Support\Facades\Hash;

class EmployeeStatusController extends Controller
{
    public function showAll() //done
    {

        $Status = EmployeeStatus::all();
        return response()->json($Status);
    }

    public function showOne($id) //done
    {
        $Status = EmployeeStatus::find($id);
        return response()->json($Status);
    }

    public function createStatus(Request $request) //done
    {

        $Status = new EmployeeStatus();

        $Status->status_karyawan = $request->status_karyawan;

        $Status->save();

        return response()->json("Success");
    }

    public function updateStatus(Request $request, $id) //done
    {
        $Status = EmployeeStatus::find($id);

        $Status->status_karyawan = $request->status_karyawan;

        $Status->save();

        return response()->json(["data"=>$Status, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $Status = EmployeeStatus::find($id);
        $Status->delete();

        return response()->json('success deleted');
    }
}
