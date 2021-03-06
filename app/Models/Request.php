<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    public function Event()
    {
        return $this->belongsTo(Event::class);
    }

    public function Organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function Advisor()
    {
        return $this->belongsTo(Advisor::class);
    }
}
