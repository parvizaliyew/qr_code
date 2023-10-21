<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\QrArticle;
use Illuminate\Http\Request;
use Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy("created_at","desc")->paginate(10);
        $qr_views = QrArticle::orderBy("created_at","desc")->with('getArticle')->get();
        
        return view('admin.article.index',compact('articles','qr_views'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all() ;

        if($request->status==1)
        {
            $data['token']=$token = Str::random(10);
        }
        Article::create($data);
        toastr()->success('Article successfuly added');
        return redirect()->back();
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
        $article = Article::find($id);

        return response()->json($article, 200);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        if ($request->status == 1) {
            $data['token'] = $token = Str::random(10);
        } else {
            $data['token'] = $token = null;
        }

        $article = Article::find($id); 
        $article->update($data);

        toastr()->success('Article successfully updated');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article=Article::findOrFail( $id );

        $article->delete();

        toastr()->success('Article Succesfully deleted');

        return redirect()->back();

    }
}
