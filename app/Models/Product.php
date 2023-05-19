<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\ProductMedia;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_description',
        'description',
        'SKU',
        'inventory_id',
        'category_id',
        'subcategory_id',
        'brand_id',
        'color',
        'size',
        'is_new',
        'is_feature',
        'is_offer',
        'status'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class, 'inventory_id', 'id');
    }

    public function discount(): BelongsTo
    {
        return $this->belongsTo(Discount::class);
    }
    public function productMedia(): HasOne
    {
        return $this->hasOne(ProductMedia::class, 'product_id', 'id');
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
