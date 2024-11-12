<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientGroups extends Model
{
    use HasFactory;
    protected $primaryKey = "id";

    protected $fillable=['typeDoc',
    'dni',
    'borndate',
    'name',
    'lastname',
    'eps',
    'visitorType',
    'phone',
    'email',
    'group'];
}
