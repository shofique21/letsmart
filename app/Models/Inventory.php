<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Product;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['quantity'];

    public function product():HasOne
    {
        return $this->hasOne(Product::class);
    }
}
