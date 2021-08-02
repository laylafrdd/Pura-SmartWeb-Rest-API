<?php

namespace App\Http\Controllers;

use App\Models\RegulationVideo;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Hash;

class RegulationVideoController extends Controller
{
    public function showAll() //done
    {

        $RegulationVideo = RegulationVideo::all();
        return response()->json($RegulationVideo);
    }

    public function showOne($id) //done
    {
        $RegulationVideo = RegulationVideo::find($id);
        return response()->json($RegulationVideo);
    }

    public function create(Request $request) //done
    {

        $RegulationVideo = new RegulationVideo();

        $RegulationVideo->nama_peraturan = $request->nama_peraturan;
        $RegulationVideo->link_youtube = $request->link_youtube;
        $RegulationVideo->status_karyawan = $request->status_karyawan;
       


        $RegulationVideo->save();

        return response()->json(["message" => "success"]);
    }

    public function update(Request $request, $id) //done
    {
        $RegulationVideo = RegulationVideo::find($id);

        $RegulationVideo->nama_peraturan = $request->nama_peraturan;
        $RegulationVideo->link_youtube = $request->link_youtube;
        $RegulationVideo->status_karyawan = $request->status_karyawan;
       


        $RegulationVideo->save();

        return response()->json(["data" => $RegulationVideo, "message" => "succes"]);
    }

    public function delete($id) //done
    {
        # code...
        $RegulationVideo = RegulationVideo::find($id);
        $RegulationVideo->delete();

        return response()->json(["data" => $RegulationVideo, "message" => 'success']);
    }
}
