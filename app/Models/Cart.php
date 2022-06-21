<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'id_number',
        'email',
        'phone',
        'state',
        'city',
        'career',
        'copy_of_instrument_or_survey_report',
    ];
}
