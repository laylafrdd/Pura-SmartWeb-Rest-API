<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

// use Illuminate\Support\Facades\Hash;

class ArticleCategoryController extends Controller
{
    public function showAllArticleCategory() //done
    {

        $Category = ArticleCategory::all();
        return response()->json($Category);
    }

    public function showOne($id)
    {
        $Category = ArticleCategory::find($id);
        return response()->json($Category);
    }

    public function createArtCAt(Request $request) //done
    {

        $Category = new ArticleCategory();

        $Category->nama_kategori_artikel = $request->nama_kategori_artikel;

        $Category->save();

        return response()->json(["message" => "success"]);
    }

    public function updateArtCAt(Request $request, $id) //done
    {
        $Category = ArticleCategory::find($id);

        $Category->nama_kategori_artikel = $request->nama_kategori_artikel;

        $Category->save();

        return response()->json(["data" => $Category, "message" => "success"]);
    }

    public function delete($id)
    {
        # code...
        $Category = ArticleCategory::find($id);
        $Category->delete();

        return response()->json(["data" => $Category, "message" => 'success']);
    }
}
