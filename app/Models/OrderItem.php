<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Order;
use App\Models\Product;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable =['order_id','product_id','quantity','product_price','tax','discount'];

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function products():BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
