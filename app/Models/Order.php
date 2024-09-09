<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Properti fillable untuk mass assignment
    protected $fillable = [
        'product_id',   // Menambahkan product_id di sini
        'quantity',
        'total_price',
    ];

    // Relasi ke model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
