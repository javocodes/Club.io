<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id', 'advisor_card',
        'gender', 'dob', 'address', 'phone_no'
    ];

    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function Request()
    {
        return $this->hasMany(Request::class);
    }
}
