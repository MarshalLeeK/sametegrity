<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class categoryDrugs extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'categoriesDrugs';

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

    public function code(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtoupper($value)
        );
    }
}
