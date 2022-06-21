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
        'image',
        'number_of_floors',
        'number_of_rooms',
        'Land_area',
        'price',
        'designed_by',
        'design_details',
        'most_requested',
        'design_book',
        'notes' ,
    ];
    public function photes()
    {
    return $this->hasMany(photes_of_product::class);
    }

    public function design_book()
    {
    return $this->hasMany(design_book::class);
    }

    public function design_informations()
    {
    return $this->hasMany(design_informations::class);
    }



}
