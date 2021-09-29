<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $table = 'languages';
    protected $primaryKey = 'languages_id';

    public function description()
    {
        return $this->hasMany(Description::class,'languages_id', 'languages_id');

    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_description', 'products_id','languages_id');
    }
}
