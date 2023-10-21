<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Post extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $table = 'posts';

    public $translatedAttributes = ['title','description'];

    protected $fillable = [
        // 'title',
        // 'description',
        'slug',
    ];
}