<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "price",
        "rooms",
        "surface",
        "description"
    ];

    public function place() {
        return $this->belongsTo(Place::class);}

    public function images()
    {
        return $this->hasMany(Image::class);
    }

}
