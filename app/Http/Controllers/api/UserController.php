<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{

     public function getAll(Request $request){
          return  User::all();
     }
     public function show($id){
          $data = User::find($id);
          return response()->json($data,200);
     }
     public function store(Request $request){
          $data = User::create($request->all());
          return response()->json($data,200);
     }
     public function login(Request $request){
          $tk = $request->username;
          $mk = $request->password;
          $data = User::where('username',$tk)->where('password',$mk)->first();
          return  $data;   
     }
     public function edit(Request $request,$id)
     {
          $array = $request->all();
          unset($array['password2']);
          unset($array['oldpassword']);
          $data = User::where('id',$id)->update($array);
          $data2 = User::find($id);
          return  $data2;
     }

     public function delete($id)
     {
         $data = User::where('id',$id)->delete();
         return response()->json($data,200);
     }

}
