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

    // problem with route model bidding custom keys https://stackoverflow.com/a/61073459/15694873
    public function getRouteKeyName()
    {
        return 'name';
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->select(["id", "name"]);
    }
}
