<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Translation;
use App\Models\Post;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        app()->setLocale('az');
        $translations=Translation::get();

        return view('admin.create',compact('translations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        app()->setLocale('az');
        $post = new Post;
        $post->fill($request->data);
        $post->slug = $request->slug;
        $post->save();
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $translations=Translation::get();
        $post = Post::where('id',$id)->first();

        return view('admin.edit',compact('translations','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->fill($request->data);
        $post->slug = $request->slug;
        $post->save();
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
