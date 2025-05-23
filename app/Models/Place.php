<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        "street",
        "bte",
        "city",
        "code",
        "country",
        "house_id"
    ];

    public function house() {
        return $this->belongsTo(House::class);
    }
}
