<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headquarter extends Model
{
    use HasFactory;
    protected $primaryKey = "id";

    protected $fillable=['nit',
    'campusName',
    'department',
    'city',
    'neighborhood',
    'addres',
    'date',
    'phoneHeadquarter',
    'emailHeadquarter'];
}
