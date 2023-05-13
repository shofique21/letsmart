<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductMedia extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'single_image','gallery_images'];
    protected $casts = [
        'gallery_images' => 'array'
    ];

    public function product():BelongsTo
    {
        return $this->belongsTo('Product', 'product_id','id');
    }

}
