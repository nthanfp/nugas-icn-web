<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JokiPortfolio extends Model
{
    use HasFactory;

    protected $table = 'joki_portfolio';

    protected $fillable = [
        'name',
        'description',
        'thumbnail',
        'file_url',
        'task_date',
        'id_joki_categories',
    ];

    public function category()
    {
        return $this->belongsTo(JokiCategory::class, 'id_joki_categories');
    }
}
