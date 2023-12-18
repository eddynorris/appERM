<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'unit_measure',
        'container',
        'weight',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function salesDetails()
    {
        return $this->hasMany(SaleDetail::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
