<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'number_of_floors',
        'number_of_rooms',
        'Land_area',
        'price',
        'designed_by',
        'status',
        'design_details',
        'most_requested',
        'design_book',
        'notes' ,
    ];
    public function photes()
    {
    return $this->hasMany(PhotoOfProduct::class);
    }

    public function informations()
    {
    return $this->hasMany(DesignInformation::class);
    }

    public function favorite(){
        return $this->hasMany(Favorite::class);
     }

    public function cart(){
        return $this->hasMany(Cart::class);
     }

}
