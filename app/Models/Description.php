<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $table = 'products_description';
    protected $primaryKey = 'products_description_id';

    public function products()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'languages_id');
    }
}
