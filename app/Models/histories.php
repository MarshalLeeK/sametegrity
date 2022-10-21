<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class histories extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    
    protected $fillable = [];

    // ublic function field(): Attribute
    // {
    //     return new Attribute(
    //         get: fn($value) => strtoupper($value),
    //         set: fn($value) => strtolower($value)
    //     );
    // }
}
