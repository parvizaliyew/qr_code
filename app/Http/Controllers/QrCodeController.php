<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\QrArticle;

class QrCodeController extends Controller
{

    public function index()
    {
      $articles = Article::where('status',1)->get();
      return view('qrcode',compact('articles'));
    }

    public function qr_article(Request $request)
    {
        $token= $request->get('t');
        $article = Article::where('token',$token)->first();
        if(!empty($article))
        {
            $qr_article= new QrArticle();
            $qr_article->article_id=$article->id;
            $qr_article->view_time=now();
            $qr_article->view_count=1;
            $qr_article->ip = $request->ip();
            $qr_article->save();
        }
        return view('article',compact('article'));
    }
}
