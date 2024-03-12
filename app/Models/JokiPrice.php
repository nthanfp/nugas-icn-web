<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JokiPrice extends Model
{
    use HasFactory;

    protected $table = 'joki_price';

    protected $fillable = [
        'name',
        'price',
        'unit',
        'description',
        'id_joki_categories',
    ];

    public function category()
    {
        return $this->belongsTo(JokiCategory::class, 'id_joki_categories');
    }
}
