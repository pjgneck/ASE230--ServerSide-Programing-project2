<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    
    protected $fillable = ['name', 'quantity', 'inventory_id'];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
