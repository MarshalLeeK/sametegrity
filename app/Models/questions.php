<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory, HasUuids;

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}

