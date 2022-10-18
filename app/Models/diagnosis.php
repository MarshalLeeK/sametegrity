<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class diagnosis extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $fillable = [

        'code',
        'name',
        'description',
        'observation',
        'z_xOne'

    ];

    public function name(): Attribute{
        return new Attribute(
            get: fn($value) => strtoupper(trim($value)),
            set: fn($value) => strtoupper(trim($value))
        );}
    
    public function description(): Attribute{
        return new Attribute(
            get: fn($value) => strtoupper(trim($value)),
            set: fn($value) => strtolower(trim($value))
        );}
    
    public function observation(): Attribute{
        return new Attribute(
            get: fn($value) => strtolower(trim($value)),
            set: fn($value) => strtolower(trim($value))
        );}

}
