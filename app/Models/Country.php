<?php

namespace App\Models;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
    ];

    public function schools()
    {
        return $this->hasMany(School::class)->where('state_id', 1);
    }
}
