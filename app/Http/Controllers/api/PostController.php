<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function all()
    {
        return DB::table('posts')->get();
    }
    public function allStatus2()
    {
        return DB::table('posts')->where('status',2)->get();
    }
    public function show($id)
    {
        $data = DB::table('posts')->where('id',$id)->first();
        return response()->json($data,200);
    }

    public function edit(Request $request,$id)
    {
        $artribute = $request->all();
        if($artribute['status'] == 2){
            $artribute['time_published'] = date("Y-m-d");
        }
        $data = DB::table('posts')->where('id',$id)->update($artribute);
        return response()->json($data,200);
    }

    
    public function store(Request $request)
    {
        $data = DB::table('posts')->insert($request->all());
        return response()->json($data,200);
    }

    public function delete($id)
    {
        $arrayId = explode(',', $id);
        $data = DB::table('posts')->whereIn('id',$arrayId)->delete();
        return response()->json($data,200);
    }

    public function locSort($key)
    {
        return DB::table('posts')->orderBy('id',$key)->get();
    }

    public function search($key){
        $data =DB::table('posts')->where('name_post','like','%'.$key.'%')->get();
        return $data;
    }


    public function getPostOfCate($id)
    {
        return DB::table('posts')->where('id_cate',$id)->get();
    }
    public function getPostRandomAll()
    {
        return DB::table('posts')->where('status',2)->inRandomOrder()->get();
    }

    public function getPostRanDom($number)
    {
        return DB::table('posts')->where('status',2)->inRandomOrder()->limit($number)->get();
    }


    public function getPostOfCateRanDom($id,$number)
    {
        return DB::table('posts')->where('status',2)->where('id_cate',$id)->inRandomOrder()->limit($number)->get();
    }
}
