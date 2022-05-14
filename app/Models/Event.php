<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organization;
use App\Models\Request;

class Event extends Model
{
    use HasFactory;

    public function Organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function Request()
    {
        return $this->belongsTo(Request::class);
    }
}
