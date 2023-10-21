<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class QrArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id','view_time','view_count','ip'
    ];
    
    public function getArticle()
    {
        return $this->belongsTo(Article::class,'article_id');
    }
    
    
}
