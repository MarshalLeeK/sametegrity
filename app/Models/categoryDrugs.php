<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class categoryDrugs extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $fillable = [
        'code',
        'name',
        'description',
        'z_xOne'

    ];

    public function name(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtoupper(trim($value))
        );
    }
}
