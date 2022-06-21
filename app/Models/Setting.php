<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'title',
        'description',
        'video',
        'country',
        'state',
        'zip',
        'street',
        'Building',
        'email',
        'commercial_registration_no',
        'tax_number',


    ];

    public function photes()
    {
    return $this->hasMany(photes_of_setting::class);
    }

    public function phones()
    {
    return $this->hasMany(phones_of_setting::class);
    }
}
