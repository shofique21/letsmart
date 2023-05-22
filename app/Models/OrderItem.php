<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Order;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable =['order_id','product_id','quantity','item_total_price'];

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }
}
