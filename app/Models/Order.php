<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "quantity",
        "unit_price",
        "total_price",
        "user_paid",
        "email_sent",
        "user_id",
    ];

    public function codes()
    {
        return $this->hasMany(Code::class);
    }
}
