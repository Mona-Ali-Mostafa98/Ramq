<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'full_name',
        'id_number',
        'email',
        'phone',
        'career',
        'copy_of_instrument_or_survey_report',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function cities()
    {
    return $this->hasMany(City::class);
    }

    public function regions()
    {
    return $this->hasMany(Region::class);
    }
 }
