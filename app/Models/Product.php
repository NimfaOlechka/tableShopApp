<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'products_id';
    protected $with = ['description' , 'languages'];

    public function description()
    {
        return $this->hasMany(Description::class, 'products_id', 'products_id');
    }

    public function languages()
    {
        return $this->hasManyThrough(Language::class, 'products_description', 'products_id','languages_id');
    }

    /* public static function products_description($language_id = '1')
    {      
        return static::all()->firstWhere('slug',$slug);        

    } */

    
}
