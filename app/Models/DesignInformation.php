<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'information',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
