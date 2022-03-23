<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Author,
    Post
};
use App\Http\Resources\{
    AuthorResource
};
class AuthorController extends Controller
{
    public function index() {
        $authors = Author::all();
        return new AuthorResource($authors);
    }
    public function store(Request $request) {
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $name='authors/'.uniqid().'.'.$file->extension();
            $file->storePubliclyAs('public',$name);
            $data['image']=$name;
        }
        $author=Author::create($data);
        return response()->json([
            'status' => true
          ]);
    }
    public function update(Request $request) {
        return $request;
    }
    public function show(Author $author)
    {
        return new AuthorResource($author);
    }
}
