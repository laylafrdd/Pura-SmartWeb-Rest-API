<?php

namespace App\Http\Controllers;

use App\Models\ArticleContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

// use Illuminate\Support\Facades\Hash;

class ArticleContentController extends Controller
{
    public function showAllArticle() //done
    {
        $Article = ArticleContent::all();
        return response()->json($Article);
    }

    public function showOne($id) //done
    {
        $Article = ArticleContent::find($id);
        return response()->json($Article);
    }

    public function createdArticle(Request $request) //done

    {
        $Article = new ArticleContent();
        $Article->judul_artikel = $request->judul_artikel;
        $Article->isi_artikel = $request->isi_artikel;
        $Article->status_karyawan = $request->status_karyawan;
        $Article->kategori_artikel = $request->kategori_artikel;

        $Article->save();
        return response()->json(["data" => $Article, "message" => "success"]);
    }

    public function updateArticle(Request $request, $id)
    {
        $Article = ArticleContent::find($id);
        $Article->judul_artikel = $request->judul_artikel;
        $Article->isi_artikel = $request->isi_artikel;
        $Article->status_karyawan = $request->status_karyawan;
        $Article->kategori_artikel = $request->kategori_artikel;
        $Article->save();

        return response()->json(["data" => $Article, "message" => "success"]);
    }

    public function delete($id) //done
    {
        $Article = ArticleContent::find($id);
        $Article->delete();

        return response()->json(["data" => $Article, "message" => 'success']);
    }
}
