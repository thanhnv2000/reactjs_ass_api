<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return Contact::all();
    }
 
    public function show($id)
    {
        return Contact::find($id);
    }

    public function store(Request $request)
    {
        return Contact::insert($request->all());
        
    }

    public function update(Request $request, $id)
    {
        $article = Contact::find($id);
        $article->update($request->all());
        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Contact::findOrFail($id);
        $article->delete();
        return 204;
    }
}
