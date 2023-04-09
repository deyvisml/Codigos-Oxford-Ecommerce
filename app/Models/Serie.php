<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "category_id"
    ];

    public function levels()
    {
        return $this->hasMany(Level::class);
    }
}
