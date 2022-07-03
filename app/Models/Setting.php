<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfSetting;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'title',
        'description',
        'video',
        'address',
        'phone',
        'email',
        'commercial_registration_no',
        'tax_number',
        'status'

    ];

    public function photes()
    {
    return $this->hasMany(PhotoOfSetting::class);
    }

    public function phones()
    {
    return $this->hasMany(PhoneOfSetting::class);
    }
}
