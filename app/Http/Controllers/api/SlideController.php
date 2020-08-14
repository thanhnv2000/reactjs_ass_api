<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Facades\DB;

class SlideController extends Controller
{
    public function all(){
        return Slide::all();
    }
    public function edit(Request $request, $id){
        $article = Slide::findOrFail($id);
        $article->update($request->all());
        return response()->json($article,200);
    }
    public function show($id)
    {
        return Slide::find($id);
    }

}
