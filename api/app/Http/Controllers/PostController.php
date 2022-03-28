<?php

namespace App\Http\Controllers;

use App\Models\{
    Post,
    Author
};
use Illuminate\Http\Request;
use App\Http\Resources\{
    PostResource
};


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::select('*')->with('author:*')->get();
        return response()->json([
            'status' => true,
            'posts' => $posts
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $name='posts/'.uniqid().'.'.$file->extension();
            $file->storePubliclyAs('public',$name);
            $data['image']=$name;
        }
        $post=Post::create($data);
        return new PostResource($post);
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $name='posts/'.uniqid().'.'.$file->extension();
            $file->storePubliclyAs('public',$name);
            $data['image']=$name;
        }
        return $data;
        $post->update();
        return response()->json([
            'status' => true
          ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json([
            'status' => true
          ]);
    }
}
