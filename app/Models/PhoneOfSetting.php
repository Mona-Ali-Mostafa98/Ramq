<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneOfSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'setting_id',
        'phone',
    ];
    public function setting()
    {
        return $this->belongsTo(Setting::class);

    }
}
