<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;
    protected $fillable =['user_id','total'];

    public function orderItems():HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_id','id');
    }
}
