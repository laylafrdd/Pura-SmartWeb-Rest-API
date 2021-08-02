<?php

namespace App\Http\Controllers;

use App\Models\Valuation;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class ValuationController extends Controller
{
    public function showAll() //done
    {

        $Valuation = Valuation::all();
        return response()->json($Valuation);
    }

    public function showOne($id) //done
    {
        $Valuation = Valuation::find($id);
        return response()->json($Valuation);
    }
}
