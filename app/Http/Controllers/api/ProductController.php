<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function all()
    {
        // $data= Product::all();
        $data = DB::table('products')->join('categories','products.id_category','=','categories.id')
        ->select('products.*','categories.name_category as name_category')
        ->get();
        return response()->json($data,200);

    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function store(Request $request)
    {
        $data = Product::create($request->all());
        return response()->json($data,200);
    }

    public function edit(Request $request,$id)
    {
        $data = Product::where('id',$id)->update($request->all());
        return response()->json($data,200);
    }
    public function delete($id)
    {
        $arrayId = explode(',', $id);
        $data = Product::whereIn('id',$arrayId)->delete();
        return response()->json($data,200);
    }

    
    public function locSort($key)
    {
        return DB::table('products')->orderBy('id',$key)->get();
    }
    public function get3productofCate($id)
    {
       return Product::where('id_category',$id)->inRandomOrder()->limit(6)->get();
    }

    public function product4tof5cate(){
        $data= [];
        $data['adidas'] = Product::where('id_category',3)->inRandomOrder()->limit(4)->get();
        $data['nikes'] = Product::where('id_category',2)->inRandomOrder()->limit(4)->get();
        $data['vans'] = Product::where('id_category',4)->inRandomOrder()->limit(4)->get();
        $data['giayda'] = Product::where('id_category',5)->inRandomOrder()->limit(4)->get();

        return $data;
    }


    public function search($key){
        $data = Product::where('name_product','like','%'.$key.'%')->get();
        return $data;
    }

 

    
}
