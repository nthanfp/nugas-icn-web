<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JokiCategory extends Model
{
    use HasFactory;

    protected $table = 'joki_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function prices()
    {
        return $this->hasMany(JokiPrice::class, 'id_joki_categories');
    }

    public function portfolios()
    {
        return $this->hasMany(JokiPortfolio::class, 'id_joki_categories');
    }
}
