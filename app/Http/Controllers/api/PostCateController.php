<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostCateController extends Controller
{
    public function all()
    {
        return DB::table('post_cate')->get();
    }
    public function allClient()
    {
        return DB::table('post_cate')->where('id','!=',1)->get();
    }

    public function show($id)
    {
        $data= DB::table('post_cate')->find($id);
        return response()->json($data,200);

    }
    public function delete($id)
    {
        // $arrayId = explode(',', $id);
        $data = DB::table('post_cate')->where('id',$id)->delete();
        $changeCate = DB::table('posts')->where('id_cate',$id)->update(['id_cate'=>1]);
        return response()->json($data,200);
    }
    public function store(Request $request)
    {
        return DB::table('post_cate')->insert($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = DB::table('post_cate')->where('id',$id)->update($request->all());
        return $article;
    }
}

