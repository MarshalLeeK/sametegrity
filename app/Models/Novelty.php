<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novelty extends Model
{
    use HasFactory;
    protected $fillable=['title',
    'subtitle',
    'description',
    'date',
    'published_by'];
    protected $dates = ['date'];
    public $timestamps = false;
}
