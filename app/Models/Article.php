<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'articles_category_id',
        'title',
        'content',
        'author',
    ];

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'articles_category_id');
    }
}
