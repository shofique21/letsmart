<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    protected $fillable =['user_id','total','total_tax'];

    public function orderItems():HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments():HasOne
    {
        return $this->hasOne(Payment::class);
    }
}
