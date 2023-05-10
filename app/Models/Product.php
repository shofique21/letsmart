<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\ProductMedia;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_description',
        'description',
        'SKU',
        'price',
        'inventory_id',
        'category_id',
    ];
   
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class, 'inventory_id','id');
    }

    public function discount(): BelongsTo
    {
        return $this->belongsTo(Discount::class);
    }
    public function productMedia():HasOne
    {
        return $this->hasOne(ProductMedia::class,'product_id', 'id');
    }

}
