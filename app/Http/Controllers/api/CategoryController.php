<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function allHaveTotalProduct()
    {
        $data = DB::table('categories')
        ->leftJoin('products','products.id_category','=','categories.id')
        ->select(
        [DB::raw('COUNT(*) as total_product')
        ,'categories.id as id'
        ,'categories.name_category as name_category'
        ,'categories.image as image' 
        ,'categories.cap_cate as cap_cate'])
        ->groupBy('id')->get();
        return $data;
    }

    public function getTotalProduct($id_cate){
        $data = DB::table('products')->where('id_category',$id_cate)->count();
        return $data;
    }

    public function getProductOfCate($id_cate){
        $data = DB::table('products')->where('id_category',$id_cate)->get();
        return $data;
    }

    public function test(){
        $array = DB::table('categories')
        ->join('products','products.id_category','=','categories.id')
        ->select(
        [DB::raw('COUNT(*) as total_product')
        ,'categories.id as id'])
        ->groupBy('id')->get();

        $data = [];
        foreach($array as $value){
        $data[$value->id] = $value->total_product;
        }
        return $data;
    }
 
    public function show($id)
    {
        return Category::find($id);
    }

    public function store(Request $request)
    {
        return Category::insert($request->all());
        
    }

    public function update(Request $request, $id)
    {
        $article = Category::findOrFail($id);
        $article->update($request->all());
        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Category::findOrFail($id);
        $article->delete();
        $changeCate = DB::table('products')->where('id_category',$id)->update(['id_category'=>1]);
        return 204;
    }

    public function productCate($id)
    {
        $data = DB::table('products')->where('id_category',$id)->get();
        return response()->json($data,200);

    }

    public function searchFolowPrice($key,$id_cate){
        $data= [];
        if($key == 25){
              $data = DB::table('products')->where('id_category',$id_cate)->whereBetween('price',[200000,500000])->get();
        }else if ($key == 51){
             $data = DB::table('products')->where('id_category',$id_cate)->whereBetween('price',[500000,1000000])->get();
        }else if ($key == 1000){
            $data = DB::table('products')->where('id_category',$id_cate)->where('price','>=',1000000)->get();
        }else{
            $data =DB::table('products')->where('id_category',$id_cate)->get();
        }     
        return $data;
    }



}
