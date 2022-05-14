<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'student_id', 'organization_id',  'memberName',
        'memberDob', 'studentCard', 'memberPosition'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
