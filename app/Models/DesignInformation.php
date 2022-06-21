<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'engineering_office',
        'kitchen',
        'living_room',
        'minimum_cost',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
