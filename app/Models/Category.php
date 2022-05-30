<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table= 'categories';

    public function types(){
        return $this->hasMany(Type::class);
    }

    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

  
}