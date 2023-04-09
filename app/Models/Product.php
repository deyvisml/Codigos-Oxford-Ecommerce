<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "isbn",
        "edition",
        "format",
        "licence_length",
        "price_usd",
        "price_pen",
        "level_id",
        "iamge"
    ];
}
