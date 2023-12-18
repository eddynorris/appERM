<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsidiary extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'ruc',
        'country',
        'department',
        'province',
        'district',
        'address',
        'type',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
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
