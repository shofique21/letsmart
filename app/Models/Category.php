<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Subcategory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','description'];

    public function products():HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function subcategories():HasMany
    {
        return $this->hasMany(Subcategory::class,'category_id', 'id');
    }
}
